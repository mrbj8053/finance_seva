<?php

namespace App\Http\Controllers;

use App\Models\Reward;
use App\Models\RewardWinner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RewardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
    function rewardsAchieved()
    {
        $rewards=RewardWinner::with('rewardDetail')->with('user')->where('user_id',Auth::user()->id)->get();
        return view('admin.myRewards',compact('rewards'));
    }
}
