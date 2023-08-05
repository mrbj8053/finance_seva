<?php

namespace App\Http\Controllers;

use App\Helper\myhelper;
use App\Models\PackageRequest;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function showAllUsers($type="Active")
    {
        if($type=='Active')
        $userList=User::where('role','user')->with('packageRequest')->where('is_disabled',0)->where('is_active',1)->get();
        else if($type=="Inactive")
        $userList=User::where('role','user')->with('packageRequest')->where('is_disabled',0)->where('is_active',0)->get();
        else if($type=="Blocked")
        $userList=User::where('role','user')->with('packageRequest')->where('is_disabled',1)->get();

        return view('admin.allUsers',compact('userList','type'));
    }
    function loginUser($id)
    {
        try {
            $decrypted = Crypt::decrypt($id);
            Auth::login(User::find($decrypted));
            return redirect()->route('home');
        } catch (Exception $e) {
            myhelper::showMessage("Invalid user, unable to login.",true);
        }
        return redirect()->back();
    }
    function showBusiness()
    {
        $title="Company";
        $business=DB::table('package_requests')
        ->join('packages','package','packages.id')
        ->select([DB::raw('sum(entry_amount) as entry_amount'),DB::raw("Cast(package_requests.updated_at as Date) as upd")])
        ->where('package_requests.status',1)
        ->groupBy('upd')
        ->get();

        return view('admin.companyBusiness',compact('business','title'));
    }
    function showBusinessDetail($date)
    {
        $title="$date";
        $business=PackageRequest::where('status',1)->whereDate('updated_at',$date)->get();
        return view('admin.companyBusinessDetail',compact('business','title'));
    }
}
