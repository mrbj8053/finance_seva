<?php

namespace App\Http\Controllers;

use App\Helper\myhelper;
use App\Models\Income;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index()
    {
        $title='Withdraw Details';
        return view('admin.withdraw',compact('title'));
    }
    function apply()
    {
        $balance=Income::sum('amount');
        $withdraws=Withdraw::all();
        return view('admin.withdraw',compact('balance','withdraws'));
    }
    function applyPost(Request $request)
    {
        $balance=Income::sum('amount');
        if($request->amount<360)
        {
            myhelper::showMessage("Minimum withdraw amount is 260",true);
        }
        else if($request->amount>$balance)
        {
            myhelper::showMessage("Insufficient balance , you have only $balance Rs in your account",true);

        }
        else
        {
            $amount=$request->amount;
            $adminCharge=$request->amount*0.15;
            $adminCharge=$request->amount*0.15;
            $netAmount=$amount-$adminCharge;
            $withraw=new Withdraw();
            $withraw->user_id=Auth::user()->id;
            $withraw->amount=$amount;
            $withraw->admin_charge=$adminCharge;
            $withraw->admin_charge_per=15;
            $withraw->net_amount=$netAmount;
            $withraw->name=$request->name;
            $withraw->account_number=$request->account_number;
            $withraw->ifsc_code=$request->ifsc_code;
            $withraw->save();

            $income=new Income();
            $income->user_id=Auth::user()->id;
            $income->income_type='Withdraw';
            $income->amount=$amount*-1;
            $income->admin_charge=$adminCharge;
            $income->admin_charge_per=15;
            $income->net_amount=$netAmount*-1;
            $income->from_user=$withraw->id;//this is ref id of withdraw
            $income->save();

            myhelper::showMessage("Withdraw Applied successfully");


        }

        return redirect()->back();
    }
}
