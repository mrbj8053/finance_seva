<?php
namespace App\Helper;

use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Session;

class myhelper
{

    static function showMessage($msg,$isError=false)
    {
        Session::flash($isError?'errorMessage':'successMessage',$msg);
    }
    static function incomeLimitReached($user_id)
    {
        $user=User::find($user_id);
        $income=$user->income->sum('amount');
        $package=$user->packageRequest->packageApplied;
        $maxIncome=$package->max_income;
        if($income>=$maxIncome)
        return true;
        else
       return false;
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

}
