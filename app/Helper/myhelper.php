<?php
namespace App\Helper;

use Illuminate\Support\Facades\Session;

class myhelper
{

    static function showMessage($msg,$isError=false)
    {
        Session::flash($isError?'errorMessage':'successMessage',$msg);
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

}



?>
