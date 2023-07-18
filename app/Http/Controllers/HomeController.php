<?php

namespace App\Http\Controllers;

use App\Helper\myhelper;
use App\Models\Income;
use App\Models\Kyc;
use App\Models\PackageRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $arr['totalUsers']=User::all()->count();
        $arr['activeUsers']=User::where('is_active',1)->count();
        $arr['bannedUsers']=User::where('is_disabled',1)->count();

        $arr['totalBusiness']=DB::table('package_requests')->join('packages','package','packages.id')->where('package_requests.status',1)->sum('packages.entry_amount');
        $arr['kycUsers']=Kyc::all()->count();
        $arr['kycVerifiedUsers']=Kyc::where('status',1)->count();
        $arr['lastClosing']='Coming Soon';
        $arr['directIncome']=Income::where('income_type','Direct')->sum('amount');
        $arr['levelIncome']=Income::where('income_type','Level')->sum('amount');
        $arr['royaltyIncome']=Income::where('income_type','Royalty')->sum('amount');
        $arr['rewardIncome']=Income::where('income_type','Reward')->sum('amount');
        $day=date('D');
        if($day>=1 && $day<=15)
        $nextClosing='15/'.date('m').'/'.date('Y');
        else
        $nextClosing=date('t').'/'.date('m').'/'.date('Y');

        $arr['nextClosing']=$nextClosing;

        return view('admin.home')->with($arr);
    }
}
