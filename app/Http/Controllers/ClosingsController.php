<?php

namespace App\Http\Controllers;

use App\Models\Closings;
use App\Models\Income;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClosingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function showClosings()
    {
        $closings=DB::select('select sum(direct) as direct,sum(level) as level,sum(roi) as roi,sum(reward) as reward,sum(royalty) as royalty,cast(created_at as Date) as created_at from closings group by created_at');
        return view('admin.closings',compact('closings'));
    }
    function showClosingsDetail($date)
    {
        $closings=DB::select("select closings.*,kycs.bank_name,kycs.account_holder_name,kycs.ifsc_code,kycs.account_number,users.own_id,users.name from closings join users on closings.user_id=users.id join kycs on users.id=kycs.user_id where cast(closings.created_at as Date)='$date'");
       /*$closings=DB::select("select k.bank_name,k.account_holder_name,k.ifsc_code,k.account_number,i.user_id,u.own_id,u.name,(select sum(amount) from incomes where income_type='Direct' and cast(i.created_at as Date)='$date' and user_id=i.user_id) as Direct,
       (select sum(amount) from incomes where income_type='Level' and cast(i.created_at as Date)='$date' and user_id=i.user_id) as Level,
       (select sum(amount) from incomes where income_type='Royalty' and cast(i.created_at as Date)='$date' and user_id=i.user_id) as Royalty,
       (select sum(amount) from incomes where income_type='ROI' and cast(i.created_at as Date)='$date' and user_id=i.user_id) as ROI,
       (select sum(amount) from incomes where income_type='Reward' and cast(i.created_at as Date)='$date' and user_id=i.user_id) as Reward from incomes as i join users as u on i.user_id=u.id left join kycs as k on k.user_id=u.id  where cast(i.created_at as Date)='$date' GROUP by i.created_at,i.user_id,u.own_id,u.name,k.bank_name,k.account_holder_name,k.ifsc_code,k.account_number ");
       */return view('admin.closingsDetail',compact('closings','date'));
    }
    function payClosing(Request $request)
    {
        $closing_id=$request->closing_id;
        $closing=Closings::find($closing_id);

        //first enter negative income
        if(!empty($closing))
        {
            $closing->is_paid=1;
            $closing->paid_on=Carbon::now();
            $direct=$closing->direct;
            $level=$closing->level;
            $royalty=$closing->royalty;
            $roi=$closing->roi;
            $reward=$closing->reward;
            $total=$direct+$level+$royalty+$roi+$reward;
            $adminCharge=$total*0.10;;
            $adminChargePer=10;
            $netAmount=$total-$adminCharge;

            $income=new Income();
            $income->user_id=$closing->user_id;
            $income->from_user=$closing->user_id;
            $income->income_type='Closing';
            $income->amount=$total*-1;
            $income->admin_charge=$adminCharge;
            $income->admin_charge_per=$adminChargePer;
            $income->net_amount=$netAmount*-1;
            $income->is_old=1;

            if($income->save())
            {
                if($closing->save())
                {
                    $obj['status']=1;
                    $obj['msg']='Paid Successfully';
                }
                else
                {
                    $obj['status']=0;
                    $obj['msg']='Unable to pay, please try after some time .';
                }
            }
            else
            {
                $obj['status']=0;
                $obj['msg']='Unable to pay, please try after some time .';
            }
        }
        else
        {
            $obj['status']=0;
            $obj['msg']='Unable to pay, please try after some time .';
        }


        return $obj;
    }

}
