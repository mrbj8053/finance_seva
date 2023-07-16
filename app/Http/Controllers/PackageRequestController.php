<?php

namespace App\Http\Controllers;

use App\Helper\myhelper;
use App\Models\Package;
use App\Models\PackageRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class PackageRequestController extends Controller
{
    function index()
    {
        $packages=Package::where('is_disabled',0)->get();
        $current=PackageRequest::where('user_id',Auth::user()->id)->first();
        return view('admin.Package.apply_package',compact('packages','current'));
    }
    function apply(Request $request)
    {
        $this->validate($request,[
            'package'=>'required|exists:packages,id',
            'payment_screenshot'=>'required|image',
        ]);

        //check if another package already in pending
        $check=PackageRequest::where('user_id',Auth::user()->id)->where('status',0)->count();
        if($check>0)
        {
            myhelper::showMessage('Already applied for a package , please wait for it before applying other.',true);
            return redirect()->back();

        }
        PackageRequest::where('user_id',Auth::user()->id)->delete();
        $packageRequest=new PackageRequest();
        $packageRequest->package=$request->package;
        $packageRequest->transaction_id=$request->transaction_id;
        $packageRequest->user_id=Auth::user()->id;
        $imagePath=myhelper::uploadImage($request->file('payment_screenshot'),'packageRequests');
        $packageRequest->payment_screenshot=$imagePath;
        if($packageRequest->save())
        {
            myhelper::showMessage('Package applied successfully');
        }
        else
        {
            myhelper::showMessage('Unable to apply package please try after some time.',true);
        }
        return redirect()->back();
    }
    function showRequests($type=0)
    {
       if($type==0)
       $title="Pending";
       else if($type==1)
       $title="Approoved";
       elseif($type==2)
       $title="Paid";

       if(Auth::user()->role=='admin')
       $packageRequests=PackageRequest::with('packageApplied','user')->get();
       else
       $packageRequests=PackageRequest::with('packageApplied','user')->where('user_id',Auth::user()->id)->get();

       $packageRequests=$packageRequests->where('status',$type);

        return view('admin.Package.show_requests',compact('packageRequests','title'));

    }
    function updateRequest(Request $request)
    {
        try {
            $package_id = Crypt::decrypt($request->id);
            $package=PackageRequest::find($package_id);
            if($package->status!=0)
            {
                myhelper::showMessage("Unable to changes packages status, package already applied.");
            }
            else
            {
                if($request->type==1)
                {
                    myhelper::showMessage('Package approoved successfully');

                }
                else if($request->type==2)
                {
                    $package->status=2;
                    $package->save();
                    myhelper::showMessage('Package rejected successfully');

                }
                else
                {
                    myhelper::showMessage('Invalid package ,please try again',true);

                }
            }
        } catch (Exception $e) {
            myhelper::showMessage($e->getMessage(),true);
        }
        return redirect()->back();
    }
}
