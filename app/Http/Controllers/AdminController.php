<?php

namespace App\Http\Controllers;

use App\Helper\myhelper;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function showAllUsers()
    {

        $userList=User::where('role','user')->get();
        return view('admin.allUsers',compact('userList'));
    }
}
