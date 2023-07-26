<?php

namespace App\Http\Controllers;

use App\Helper\myhelper;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class AdminController extends Controller
{
    function showAllUsers($type="Active")
    {
        if($type=='Active')
        $userList=User::where('role','user')->where('is_disabled',0)->where('is_active',1)->get();
        else if($type=="Inactive")
        $userList=User::where('role','user')->where('is_disabled',0)->where('is_active',0)->get();
        else if($type=="Blocked")
        $userList=User::where('role','user')->where('is_disabled',1)->get();

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
}
