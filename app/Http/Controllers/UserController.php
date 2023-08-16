<?php

namespace App\Http\Controllers;

use App\Helper\myhelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function changeUserStatus($user_id)
    {
        try {
            $user_id = Crypt::decrypt($user_id);

            $user= User::find($user_id);

            $user->is_disabled=!$user->is_disabled;

            if($user->save())
            {
                myhelper::showMessage('User status changed successfully');
            }
            else
            {
                myhelper::showMessage('Unable to change user status, please try after some time ',true);
            }


        } catch (Exception $e) {
            myhelper::showMessage($e->getMessage(),true);

        }
        return redirect()->back();

    }

}
