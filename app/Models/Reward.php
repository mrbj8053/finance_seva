<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    use HasFactory;

    function rewardRank()
    {
        return $this->belongsTo(Rank::class,'rank');
    }
    function rewardAchievers()
    {
        return $this->hasMany(RewardWinner::class,'reward_id');
    }
}
