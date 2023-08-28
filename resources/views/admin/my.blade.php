@extends('admin.master')
@section('mainContent')
    <div class="content-wrapper" style="min-height: 1114px;">

        <div class="row">
            <div class="col-md-12">

            <div class="card card-widget widget-user-2">

            <div class="widget-user-header bg-warning">
            <div class="widget-user-image">
            <img class="img-circle elevation-2" src="{{asset('logo.png')}}" alt="User Avatar">
            </div>

            <h3 class="widget-user-username">{{Auth::user()->name}}</h3>
            <h5 class="widget-user-desc">{{Auth::user()->own_id}}</h5>
            </div>
            <div class="card-footer p-0">
            <ul class="nav flex-column">
            <li class="nav-item">
            <a href="{{route('shareProfile')}}" class="nav-link my-options"><i class="fa-solid fa-share"></i>
            Share <span class="float-right badge bg-success"><i class="fa-solid fa-arrow-right righ-arrow"></i></span>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{route('withdrawApply')}}" class="nav-link my-options"><i class="fa-solid fa-money-bill-transfer"></i>
            Withdraw <span class="float-right badge bg-success"><i class="fa-solid fa-arrow-right righ-arrow"></i></span>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{route('levelMembers')}}" class="nav-link my-options"><i class="fa-solid fa-user-plus"></i>
            My Team<span class="float-right badge bg-success"><i class="fa-solid fa-arrow-right righ-arrow"></i></span>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{route('profile',['type'=>'Profile'])}}" class="nav-link my-options"><i class="fa-solid fa-user"></i>
            Edit Profile <span class="float-right badge bg-success"><i class="fa-solid fa-arrow-right righ-arrow"></i></span>
            </a>
            </li>
            <li class="nav-item">
                <a href="{{route('profile',['type'=>'Password'])}}" class="nav-link my-options"><i class="fa-solid fa-lock"></i>
                Change Password  <span class="float-right badge bg-success"><i class="fa-solid fa-arrow-right righ-arrow"></i></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link my-options">
                    <i class="fa-solid fa-right-from-bracket"></i>
                Logout
                </a>
            </li>
            </ul>
            </div>
            </div>

            </div>





            </div>

    </div>
@endsection
