<?php

namespace App\Http\Controllers;

use App\Helper\myhelper;
use App\Models\Income;
use App\Models\Withdraw;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class WithdrawController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function index()
    {
        $title = 'Withdraw Details';
        return view('admin.withdraw', compact('title'));
    }
    function apply()
    {
        $balance = Income::sum('amount');
        $withdraws = Withdraw::all();
        return view('admin.withdraw', compact('balance', 'withdraws'));
    }
    function applyPost(Request $request)
    {
        $balance = Income::sum('amount');
        if ($request->amount < 300) {
            myhelper::showMessage("Minimum withdraw amount is 300", true);
        } else if ($request->amount > $balance) {
            myhelper::showMessage("Insufficient balance , you have only $balance Rs in your account", true);
        } else {
            $amount = $request->amount;
            $adminCharge = $request->amount * 0.10;
            $adminCharge = $request->amount * 0.10;
            $netAmount = $amount - $adminCharge;
            $withraw = new Withdraw();
            $withraw->user_id = Auth::user()->id;
            $withraw->amount = $amount;
            $withraw->admin_charge = $adminCharge;
            $withraw->admin_charge_per = 10;
            $withraw->net_amount = $netAmount;
            $withraw->name = $request->name;
            $withraw->account_number = $request->account_number;
            $withraw->ifsc_code = $request->ifsc_code;
            $withraw->save();

            $income = new Income();
            $income->user_id = Auth::user()->id;
            $income->income_type = 'Withdraw';
            $income->amount = $amount * -1;
            $income->admin_charge = $adminCharge;
            $income->admin_charge_per = 10;
            $income->net_amount = $netAmount * -1;
            $income->from_user = $withraw->id; //this is ref id of withdraw
            $income->save();

            myhelper::showMessage("Withdraw Applied successfully");
        }

        return redirect()->back();
    }
    function showRequests($type)
    {
        if ($type == 0)
            $title = "Pending";
        else if ($type == 1)
            $title = "Approoved";
        elseif ($type == 2)
            $title = "Paid";
        else
            $title = "";

        if (Auth::user()->role == 'admin')
            $withdrawRequests = Withdraw::with('user')->get();
        else
            $withdrawRequests = Withdraw::with('user')->where('user_id', Auth::user()->id)->get();

        if ($type != 3)
            $withdrawRequests = $withdrawRequests->where('status', $type);
        else
            $withdrawRequests = $withdrawRequests;


        return view('admin.withdrawRequests', compact('withdrawRequests', 'title'));
    }
    function updateRequest(Request $request)
    {
        try {
            $withdraw_id = Crypt::decrypt($request->id);
            $withdraw = Withdraw::find($withdraw_id);
            if ($withdraw->status != 0) {
                myhelper::showMessage("Unable to changes withdraw status, withdraw already applied.");
            } else {
                if ($request->type == 1) {
                    $withdraw->status=1;
                    $withdraw->save();
                    myhelper::showMessage('Withdraw approoved successfully');

                } else if ($request->type == 2) {
                    $withdraw->status = 2;
                    $withdraw->save();

                    $incomeWhere['user_id']=$withdraw->user_id;
                    $incomeWhere['income_type']='Withdraw';
                    $incomeWhere['from_user']=$withdraw->id;

                    Income::where($incomeWhere)->delete();
                    myhelper::showMessage('Withdraw rejected successfully');
                } else {
                    myhelper::showMessage('Invalid package ,please try again', true);
                }
            }
        } catch (Exception $e) {
            myhelper::showMessage($e->getMessage(), true);
        }
        return redirect()->back();
    }
}
