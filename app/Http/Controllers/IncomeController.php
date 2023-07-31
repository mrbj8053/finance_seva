<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    function index($type)
    {
        $title=$type;
        $incomes=Income::where('income_type',$type)->get();
        return view('admin.incomeReport',compact('title','incomes'));
    }
}
