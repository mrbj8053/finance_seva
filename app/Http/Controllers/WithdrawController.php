<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    function index()
    {
        $title='Withdraw Details';
        return view('admin.withdraw',compact('title'));
    }
}
