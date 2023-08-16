<?php

namespace App\Http\Controllers;

use App\Models\Reward;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    function showRewards()
    {
        $rewards=Reward::with('rewardRank')->get();
        return view("admin.rewards",compact('rewards'));
    }
    function rewardAchievers($reward_id)
    {
        $reward=Reward::with('rewardAchievers')->find($reward_id);
        return view('admin.rewardAchievers',compact('reward'));
    }
}
