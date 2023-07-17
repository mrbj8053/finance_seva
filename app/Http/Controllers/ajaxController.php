<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ajaxController extends Controller
{

    function registerSuccess($ownid)
    {

        $arr['user'] = User::where('own_id', $ownid)->first();
        return view('registerSuccess', $arr);
    }
}
