<?php

namespace App\Http\Controllers;

use App\Helper\myhelper;
use App\Models\Closings;
use App\Models\Income;
use App\Models\LevelMember;
use App\Models\PackageRequest;
use App\Models\Reward;
use App\Models\RewardIncome;
use App\Models\RewardWinner;
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
    function checkSponsor(Request $request)
    {
        $user=User::where("own_id",$request->own_id)->first();
        if($user)
        {
            $obj['status']=1;
            $obj['msg']="$user->name";
        }
        else
        {
            $obj['status']=0;
            $obj['msg']='Invalud Sponsor Id';
        }
        return $obj;
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
        $created_at=Carbon::now();



        $day=date('d');
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
            $roi=$package->entry_amount*( $package->roi/100);
            $day=date("d");
            $activeDateDay=Carbon::parse($user->PackageRequest->updated_at)->format('d');
            if($user->is_old==0)
            {
                if($day>=1 && $day<=15)
                {
                    $diff=15-$activeDateDay;
                }
                else
                {
                    $diff=31-$activeDateDay;
                }
            }
            else
            {
                $diff=15;
            }
            $user->is_old=true;
            $user->save();
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
            $income->created_at=$created_at;
            $income->updated_at=$created_at;
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
                            $insertLevelIncome->amount=$levelIncome;
                            $insertLevelIncome->level=$level;
                            $insertLevelIncome->admin_charge=$levelAdminCharge;
                            $insertLevelIncome->admin_charge_per=10;
                            $insertLevelIncome->net_amount=$netLevelIncome;
                            $insertLevelIncome->created_at=$created_at;
                            $insertLevelIncome->updated_at=$created_at;
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

        $all=DB::select("select user_id,(select sum(amount) from incomes where income_type='Direct' and is_old=0 and user_id=i.user_id) as Direct,
        (select sum(amount) from incomes where income_type='Level' and is_old=0 and user_id=i.user_id) as Level,
        (select sum(amount) from incomes where income_type='Royalty' and is_old=0 and user_id=i.user_id) as Royalty,
        (select sum(amount) from incomes where income_type='ROI' and is_old=0 and user_id=i.user_id) as ROI,
        (select sum(amount) from incomes where income_type='Reward' and is_old=0 and user_id=i.user_id) as Reward from incomes as i where is_old=0 GROUP by user_id;");
        foreach($all as $inc)
        {
            $closing=new Closings();
            $closing->created_at=$created_at;
            $closing->updated_at=$created_at;
            $closing->direct=$inc->Direct??0;
            $closing->level=$inc->Level??0;
            $closing->royalty=$inc->Royalty??0;
            $closing->roi=$inc->ROI??0;
            $closing->reward=$inc->Reward??0;
            $closing->user_id=$inc->user_id;
            $closing->save();
        }
        Income::query()->update(['is_old'=>true]);
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
    function testDirects()
    {
        $packageRequests=PackageRequest::where('status',1)->get();
        $miss=0;
        $notMiss=0;
        foreach($packageRequests as $pkg)
        {
            $user=$pkg->user;
            $sponsor=$user->sponsor;

            if(!empty($user) && $sponsor)
            {
                $spPackage=$sponsor->packageRequest;
                if($sponsor->is_active==1 && $user->is_active==1)
                {
                    if($spPackage->updated_at>$pkg->updated_at)
                    {
                        $miss++;
                    }
                    else
                    {
                        if(!myhelper::incomeLimitReached($user->sponsor->id))
                        {
                            $packageSelected=$pkg->packageApplied;
                            $amount=$packageSelected->entry_amount;
                            $directIncome=$amount*($packageSelected->direct_income/100);
                            $adminCharge=$directIncome*0.10;


                            $income=new Income();
                            $income->user_id=$user->sponsor->id;
                            $income->from_user=$user->sponsor->id;
                            $income->income_type='Direct';
                            $income->amount=$directIncome;
                            $income->admin_charge=$adminCharge;
                            $income->admin_charge_per=10;
                            $income->net_amount=$directIncome-$adminCharge;
                            $income->created_at=$pkg->updated_at;
                            $income->updated_at=$pkg->updated_at;
                            $income->is_old=1;

                            $income->save();

                            //set direct business
                            $incomeUser=User::find($user->sponsor->id);
                            $incomeUser->direct_business=$incomeUser->direct_business+$amount;
                            $incomeUser->save();
                        }
                    }
                }

            }

        }
        echo $miss."<br>";
        echo $notMiss;
    }

    function checkRewards()
    {
        $businesRes=[];
        $users=User::where('is_active',1)->get();
        foreach($users as $parent)
        {
        $directMembers=User::where('sponsor_id',$parent->own_id)->get();
        $totalBusiness=0;
        $powerBusiness=0;
        foreach($directMembers as $member)
        {
            $sum=DB::select("select a.ownid,sum((select ifnull(p.entry_amount,0) from package_requests as pr join packages as p on pr.package=p.id where pr.user_id=b.id )) as business from levelmembers as a join users as b on a.child=b.own_id where a.ownid='$member->own_id' and b.is_active=1 group by a.ownid;");
            $obj['ownid']=$member->own_id;
            $obj['parent_id']=$parent->id;
            $obj['sum']=$sum[0]->business??0;

            if($obj['sum']>$powerBusiness)
            {
                $powerBusiness=$obj['sum'];
            }
            $totalBusiness+=$obj['sum'];
        }
        $otherBusiness=$totalBusiness-$powerBusiness;
        $powerBusinessSave=$powerBusiness;
        $powerBusiness=$powerBusiness;
        $otherBusinessSave=$otherBusiness;
        $otherBusiness=$otherBusiness;
        $buss['total']=$totalBusiness;
        $buss['power']=$powerBusiness;
        $buss['other']=$otherBusiness;
        $buss['reward_business']=$buss['power']+$buss['other'];
        $buss['parent_id']=$parent->id;
        $buss['parent_own_id']=$parent->own_id;
        $rewards=Reward::get();
        foreach($rewards as $rw)
        {
            if($powerBusiness>=$rw->reward_40 && $otherBusiness>=$rw->reward_60)
            {


            $check=RewardWinner::where('user_id',$buss['parent_id'])->where('reward_id',$rw->id)->count();
            if($check==0)
            {
                //insert reward
                $rewardWinner=new RewardWinner();
                $rewardWinner->user_id=$buss['parent_id'];
                $rewardWinner->reward_id=$rw->id;
                $remark="Reward win by $parent->name($parent->own_id), total business is ".$buss['total'].", power
                 business is ".$powerBusinessSave." and picked is ".$rw->reward_40.", other business is ".$otherBusinessSave." and picked ".$rw->reward_60.", Reward business is ".$buss['reward_business'];
                $rewardWinner->remarks=$remark;
                 $rewardWinner->save();


                for($i=1;$i<=$rw->multiplier;$i++)
                {
                    if($rw->is_cash==0)
                    {
                        $rewardIncome=new RewardIncome();
                        $rewardIncome->user_id=$buss['parent_id'];
                        $rewardIncome->ref_id=$rewardWinner->id;
                        $rewardIncome->amount=0;
                        $rewardIncome->type='Reward';
                        $rewardIncome->save();
                    }
                    else
                    {
                        $amount=$rw->reward/$rw->multiplier;
                        $rewardIncome=new RewardIncome();
                        $rewardIncome->user_id=$buss['parent_id'];
                        $rewardIncome->ref_id=$rewardWinner->id;
                        $rewardIncome->amount=$amount;
                        $rewardIncome->type='Reward';
                        $rewardIncome->save();
                    }
                }

            }
        }
        }
    }
        dd($businesRes);

    }

}
