<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\PackageRequest;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ajaxController extends Controller
{

    function registerSuccess($ownid)
    {

        $arr['user'] = User::where('own_id', $ownid)->first();
        return view('registerSuccess', $arr);
    }
    function setDirectBusinessAll()
    {
        $allUser=User::all();
        foreach($allUser as $user)
        {
            //directs

           $sponsor= DB::table('package_requests')->join('users','user_id','users.id')->join('packages','package','packages.id')->where('package_requests.status',1)->where('users.sponsor_id',$user->own_id)->where('users.role','user')->sum('packages.entry_amount');
           $user->direct_business=$sponsor;
           $user->save();
        }
    }
    function sendRoiAndLevel()
    {
        $day=date('D');
        if($day>=1 && $day<=15)
        $nextClosing='15';
        else
        $nextClosing=date('t');

        if($day!=$nextClosing)
        {
            return;
        }


        $users=User::with('sponsor')->where('is_active',1)->get();
        foreach($users as $user)
        {
            if(!empty($user->packageRequest))
            {
            $package=$user->packageRequest->packageApplied;
            $roi=$package->entry_amount*($package->roi/100);
            $day=date("d");
            $activeDateDay=Carbon::parse($user->PackageRequest->updated_at)->format('d');
            if($day>=1 && $day<=15)
            {
                $diff=15-$activeDateDay;
            }
            else
            {
                $diff=31-$activeDateDay;
            }
            $roi=$roi/30;
            $roi=$roi*$diff;

            $adminCharge=$roi*0.10;
            $netAmount=$roi-$adminCharge;

            //send roi income
            $income=new Income();
            $income->user_id=$user->id;
            $income->from_user=$user->id;
            $income->income_type="ROI";
            $income->amount=$roi;
            $income->admin_charge=$adminCharge;
            $income->admin_charge_per=10;
            $income->net_amount=$netAmount;
            $income->save();

            $level=1;
            $sponsor=$user->sponsor;
            while(!empty($sponsor) && $level<16)
            {

               if($sponsor->is_active==1)
               {
                    //now check if two direct active
                    $count=User::where('sponsor_id',$sponsor->own_id)->where('is_active',1)->count();
                    if($count>=2)
                    {
                        if($this->isEligibleForLevel($sponsor->direct_business,$level))
                        {
                            $levelIncomePer=0;
                            switch($level)
                            {
                                case 1:
                                $levelIncomePer=0.10;
                                break;
                                case 2:
                                    $levelIncomePer=0.05;
                                    break;
                                case 3:
                                    $levelIncomePer=0.04;
                                    break;
                                case 4:
                                    $levelIncomePer=0.03;
                                    break;
                                case 5:
                                    $levelIncomePer=0.02;
                                    break;
                                default:
                                    $levelIncomePer=0.01;
                                    break;

                            }
                            $levelIncome=$roi*$levelIncomePer;
                            $levelAdminCharge=$levelIncome*0.10;
                            $netLevelIncome=$levelIncome-$levelAdminCharge;
                            $insertLevelIncome=new Income();
                            $insertLevelIncome->user_id=$sponsor->id;
                            $insertLevelIncome->from_user=$user->id;
                            $insertLevelIncome->income_type="Level";
                            $insertLevelIncome->amount=$roi;
                            $insertLevelIncome->level=$level;
                            $insertLevelIncome->admin_charge=$levelAdminCharge;
                            $insertLevelIncome->admin_charge_per=10;
                            $insertLevelIncome->net_amount=$netLevelIncome;
                            $insertLevelIncome->save();
                            $level++;
                        }

               }
            }
               $sponsor=User::where('own_id',$sponsor->sponsor_id)->first();
               if(empty($sponsor))
               break;
            }





            }


        }
    }
    function isEligibleForLevel($directBusiness,$level)
    {
        $directBusiness=$directBusiness-10000;
        $openLevel=$directBusiness/10000;

        if($openLevel>=$level)
        {
            return true;
        }
        else
        {
            return false;

        }
    }

}
