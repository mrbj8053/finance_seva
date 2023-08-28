<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Withdraw extends Model
{
    public function newQuery()
    {

        if(Auth::user() && Auth::user()->role=='user')
        return parent::newQuery()->where('user_id', Auth::user()->id);
        else
        return parent::newQuery();
    }

    use HasFactory;
}
