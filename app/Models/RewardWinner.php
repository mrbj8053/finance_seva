<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RewardWinner extends Model
{
    use HasFactory;
    function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
    function rewardDetail()
    {
        return $this->hasOne(Reward::class,'id','reward_id');
    }
}
