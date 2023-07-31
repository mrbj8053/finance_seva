<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Models\User;
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

        $users=User::with('sponsor')->where('is_active',1)->get();
        foreach($users as $user)
        {
            if(!empty($user->packageRequest))
            {
            $package=$user->packageRequest->packageApplied;
            $roi=$package->entry_amount*($package->roi/100);
            $adminCharge=$roi*0.10;
            $netAmount=$roi-$adminCharge;

            //send roi income
            $income=new Income();
            $income->user_id=$user->id;
            $income->income_type="ROI";
            $income->amount=$roi;
            $income->admin_charge=$adminCharge;
            $income->admin_charge_per=10;
            $income->net_amount=$netAmount;
            // $income->save();

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

                        }
                        else
                        {

                        }
                    }

               }

            }

            }


        }
    }
    function isEligibleForLevel($directBusiness,$level)
    {
        if($directBusiness>=50000 && $level<=5)
        {
            return true;
        }
        else if($directBusiness>=100000 && $level<=10)
        {
            return true;
        }
        else if($directBusiness>=300000 && $level<=15)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function insertLevelIncome($toUser,$fromUser,)
    {

    }
}
