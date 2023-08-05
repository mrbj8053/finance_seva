<?php

namespace App\Http\Controllers;

use App\Models\Closings;
use App\Models\Income;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClosingsController extends Controller
{
    function showClosings()
    {
        $closings=DB::select('select sum(direct) as direct,sum(level) as level,sum(roi) as roi,sum(reward) as reward,sum(royalty) as royalty,cast(created_at as Date) as created_at from closings group by created_at');
        return view('admin.closings',compact('closings'));
    }
    function showClosingsDetail($date)
    {
       $closings=DB::select("select k.bank_name,k.account_holder_name,k.ifsc_code,k.account_number,i.user_id,u.own_id,u.name,(select sum(amount) from incomes where income_type='Direct' and cast(i.created_at as Date)='$date' and user_id=i.user_id) as Direct,
       (select sum(amount) from incomes where income_type='Level' and cast(i.created_at as Date)='$date' and user_id=i.user_id) as Level,
       (select sum(amount) from incomes where income_type='Royalty' and cast(i.created_at as Date)='$date' and user_id=i.user_id) as Royalty,
       (select sum(amount) from incomes where income_type='ROI' and cast(i.created_at as Date)='$date' and user_id=i.user_id) as ROI,
       (select sum(amount) from incomes where income_type='Reward' and cast(i.created_at as Date)='$date' and user_id=i.user_id) as Reward from incomes as i join users as u on i.user_id=u.id join kycs as k on k.user_id=u.id  where cast(i.created_at as Date)='$date' GROUP by i.created_at,i.user_id,u.own_id,u.name,k.bank_name,k.account_holder_name,k.ifsc_code,k.account_number ");
       return view('admin.closingsDetail',compact('closings','date'));
    }

}
