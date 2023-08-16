<?php

namespace App\Http\Controllers;

use App\Helper\myhelper;
use App\Models\Kyc;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class KycController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kyc=Kyc::where('user_id',Auth::user()->id)->first();
        return view('admin.Kyc.apply_kyc',compact('kyc'));
    }


    function apply(Request $request)
    {
        if(Auth::user()->is_active==0)
        {
            myhelper::showMessage("Please activate your account first for kyc",true);
            return redirect()->back();
        }
        $this->validate($request,[
            'bank_name'=>'required|string',
            'account_holder_name'=>'required|string',
            'ifsc_code'=>'required|string',
            'account_number'=>'required|string',
            'pan_number'=>'required|string',
        ]);

        //check if another package already in pending
        $check=Kyc::where('user_id',Auth::user()->id)->where('status',1)->count();
        if($check>0)
        {
            myhelper::showMessage("KYC already approoved and can't be changed",true);
            return redirect()->back();

        }
        $kyc=Kyc::where('user_id',Auth::user()->id)->first();
        if($kyc)
        $kycRequest=$kyc;
        else
        $kycRequest=new Kyc();

        $kycRequest->bank_name=$request->bank_name;
        $kycRequest->account_holder_name=$request->account_holder_name;
        $kycRequest->ifsc_code=$request->ifsc_code;
        $kycRequest->account_number=$request->account_number;
        $kycRequest->pan_number=$request->pan_number;
        $kycRequest->user_id=Auth::user()->id;
        $kycRequest->status=0;

        if(!empty($request->file('adhar_front_image')))
        {
        $imagePath=myhelper::uploadImage($request->file('adhar_front_image'),'kycRequests');
        $kycRequest->adhar_front_image=$imagePath;
        }
        if(!empty($request->file('adhar_back_image')))
        {
        $imagePath=myhelper::uploadImage($request->file('adhar_back_image'),'kycRequests');
        $kycRequest->adhar_back_image=$imagePath;
        }
        if(!empty($request->file('pan_image')))
        {
        $imagePath=myhelper::uploadImage($request->file('pan_image'),'kycRequests');
        $kycRequest->pan_image=$imagePath;
        }
        if(!empty($request->file('passbook_image')))
        {
        $imagePath=myhelper::uploadImage($request->file('passbook_image'),'kycRequests');
        $kycRequest->passbook_image=$imagePath;
        }
        if(!empty($request->file('cancel_cheque_image')))
        {
        $imagePath=myhelper::uploadImage($request->file('cancel_cheque_image'),'kycRequests');
        $kycRequest->cancel_cheque_image=$imagePath;
        }
        if($kycRequest->save())
        {
            myhelper::showMessage('KYC request applied successfully');
        }
        else
        {
            myhelper::showMessage('Unable to apply kyc request please try after some time.',true);
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
       $title="Declined";

       if(Auth::user()->role=='admin')
       $kycRequests=Kyc::with('user')->get();
       else
       $kycRequests=KYC::with('user')->where('user_id',Auth::user()->id)->get();

       $kycRequests=$kycRequests->where('status',$type);

        return view('admin.Kyc.show_requests',compact('kycRequests','title'));

    }
    function updateRequest(Request $request)
    {
        try {
            $kyc_id = Crypt::decrypt($request->id);
            $kyc=Kyc::find($kyc_id);
            if($kyc->status!=0)
            {
                myhelper::showMessage("Unable to changes kyc status, status already changed");
            }
            else
            {
                if($request->type==1)
                {
                    $kyc->status=1;
                    $kyc->save();
                    myhelper::showMessage('KYC approoved successfully');

                }
                else if($request->type==2)
                {
                    $kyc->status=2;
                    $kyc->save();
                    myhelper::showMessage('KYC rejected successfully');

                }
                else
                {
                    myhelper::showMessage('Invalid KYC ,please try again',true);

                }
            }
        } catch (Exception $e) {
            myhelper::showMessage($e->getMessage(),true);
        }
        return redirect()->back();
    }
}
