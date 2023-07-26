<?php

namespace App\Http\Controllers;

use App\Helper\myhelper;
use App\Models\Income;
use App\Models\income_misses;
use App\Models\Kyc;
use App\Models\PackageRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function showProfile(Request $request)
    {
        if(isset($request->userid))
        {
            $userid=$request->userid;
            $user=User::find($userid);
        }
        else
        $userid=0;
        return view('admin.profile',compact('userid','user'));
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function updateProfile(Request $request)
    {
        if($request->userid!=0)
        $user=User::find($request->userid);
        else
        $user=User::find(Auth::user()->id);

        $this->validate($request,[
            'name'=>'required|string',
            'email'=>"required|email|unique:users,email,$user->id,id"
        ]);


        // dd($user);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();

        myhelper::showMessage('Profile updated successfully');
        if(Auth::user()->role=='user')
        return redirect()->back();
        else
        return redirect()->route('allUsers');
    }
    public function changePassword(Request $request)
    {
        if($request->userid!=0)
        $user=User::find($request->userid);
        else
        $user=User::find(Auth::user()->id);

        if($request->userid==0)
        $this->validate($request,[
            'old_password'=>'required|string',
            'password'=>'required|confirmed',
        ]);
        else
        $this->validate($request,[
            'password'=>'required|confirmed',
        ]);

        if(Hash::check($request->old_password, $user->password) || $request->userid!=0)
        {
            $user->password=Hash::make($request->password);
            $user->save();
            myhelper::showMessage('Password changed successfully');

        }
        else
        {
            myhelper::showMessage('Invalid Old password',true);
        }
        if(Auth::user()->role=='user')
        return redirect()->back();
        else
        return redirect()->route('allUsers');

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
        $arr['todayBusiness']=DB::table('package_requests')->join('packages','package','packages.id')->where('package_requests.status',1)->whereDate('package_requests.updated_at',Carbon::today())->sum('packages.entry_amount');
        $arr['kycUsers']=Kyc::all()->count();
        $arr['kycVerifiedUsers']=Kyc::where('status',1)->count();
        $arr['lastClosing']='Coming Soon';
        $arr['directIncome']=Income::where('income_type','Direct')->sum('amount');
        $arr['levelIncome']=Income::where('income_type','Level')->sum('amount');
        $arr['royaltyIncome']=Income::where('income_type','Royalty')->sum('amount');
        $arr['rewardIncome']=Income::where('income_type','Reward')->sum('amount');
        $arr['totalIncome']=$arr['directIncome']+$arr['levelIncome']+$arr['royaltyIncome']+$arr['rewardIncome'];
        $day=date('D');
        if($day>=1 && $day<=15)
        $nextClosing='15/'.date('m').'/'.date('Y');
        else
        $nextClosing=date('t').'/'.date('m').'/'.date('Y');

        $arr['nextClosing']=$nextClosing;

        return view('admin.home')->with($arr);
    }
}
