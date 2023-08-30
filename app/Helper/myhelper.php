<?php
namespace App\Helper;

use App\Models\Company;
use App\Models\Income;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class myhelper
{

    static function showMessage($msg,$isError=false)
    {
        Session::flash($isError?'errorMessage':'successMessage',$msg);
    }
    static function getCompany()
    {
       return Company::find(1);
    }
    static function incomeLimitReached($user_id)
    {
        $user=User::find($user_id);
        $income=$user->income->sum('amount');
        if(!empty($user->packageRequest))
        {
        $package=$user->packageRequest->packageApplied;
        $maxIncome=$package->max_income;

        if($income>=$maxIncome)
        return true;
        else
       return false;
        }
        else
        {
            return false;
        }
    }
    static function uploadImage($image,$path)
{


    // Get the uploaded file
    $image = $image;

    // Generate a unique name for the file
    $imageName = time().mt_rand(10000, 99999) . '.' . $image->getClientOriginalExtension();

    // Specify the destination path within the public folder
    $destinationPath = public_path($path);

    // Move the uploaded file to the destination path
    $image->move($destinationPath, $imageName);

    // Optionally, you can save the image path to a database or perform any additional operations

    // Return a response or redirect as needed
    return $path.'/'.$imageName;
}
public static function sendMail($from , $to, $subject, $body)
    {
        try
        {

        $headers = "From: $from\r\n";
        $headers .= "Reply-To: $from\r\n";
        $headers .= "Content-Type: text/html";

        $send = (mail($to,$subject, $body, $headers));
        }
        catch(Exception $e)
        {

        }

    }
    static function sendSignInIncome()
    {
        if(Auth::user()->role=='user')
        {
        //first check if already gone
        $chk=Income::where('income_type','Signin')->where('user_id',Auth::user()->id)
        ->whereDate('created_at',Carbon::today())->count();
        if($chk==0)
        {
            $amount=15;
            $adminCharge=$amount*0.10;
            $netAmount=$amount-$adminCharge;

            $income=new Income();
            $income->user_id=Auth::user()->id;
            $income->from_user=Auth::user()->id;
            $income->income_type='Signin';
            $income->amount=$amount;
            $income->admin_charge=$adminCharge;
            $income->admin_charge_per=10;
            $income->net_amount=$netAmount;
            $income->save();
        }
        }
    }
    static function sendSignUpIncome($user_id)
    {
        $chk=Income::where('income_type','Signup')->where('user_id',Auth::user()->id)
        ->count();
        if($chk==0)
        {
            $amount=50;
            $adminCharge=$amount*0.10;
            $netAmount=$amount-$adminCharge;

            $income=new Income();
            $income->user_id=$user_id;
            $income->from_user=$user_id;
            $income->income_type='Signup';
            $income->amount=$amount;
            $income->admin_charge=$adminCharge;
            $income->admin_charge_per=10;
            $income->net_amount=$netAmount;
            $income->save();
        }
    }

}
