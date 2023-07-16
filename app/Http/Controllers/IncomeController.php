<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeController extends Controller
{
    function index($type)
    {
        $title=$type;
        return view('admin.incomeReport',compact('title'));
    }
}
