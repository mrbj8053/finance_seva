<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Income extends Model
{
    use HasFactory;
    public function newQuery()
    {

        if(Auth::user() && Auth::user()->role=='user')
        return parent::newQuery()->where('user_id', Auth::user()->id);
        else
        return parent::newQuery();
    }
    function toUser()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    function fromUser()
    {
        return $this->belongsTo(User::class,'from_user');
    }

}
