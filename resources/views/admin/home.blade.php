@extends('admin.master')
<!-- Content Wrapper. Contains page content -->
@section('mainContent')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            @if(Auth::user()->role=='admin')
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$totalUsers}}</h3>

                <p>Total Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$activeUsers}}</h3>

                <p>Active Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$bannedUsers}}</h3>

                <p>Banned Users</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$totalBusiness}}</h3>

                <p>Total Business</p>
              </div>
              <div class="icon">
               <i class="ion ion-podium"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$kycUsers}}</h3>

                <p>KYC Users</p>
              </div>
              <div class="icon">
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$kycVerifiedUsers}}</h3>

                <p>KYC Verified Users</p>
              </div>
              <div class="icon">
                <i class="far fa-star"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$lastClosing}}</h3>
                <p>Last Closing</p>
              </div>
              <div class="icon">
                <i class="far fa-calendar-alt"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$nextClosing}}</h3>
                <p>Next Closing</p>
              </div>
              <div class="icon">
                <i class="far fa-calendar-alt"></i>
              </div>
            </div>
          </div>
          @endif
@if(Auth::user()->role=='user')

<div class="col-md-4">

    <div class="card card-widget widget-user">

   <div class="widget-user-header bg-info" style="
       background: linear-gradient(2deg, rgba(233,104,40,1) 2%, rgba(110,184,232,1) 20%, rgba(58,110,175,1) 46%);
   ">
   <h3 class="widget-user-username">{{Auth::user()->name}}</h3>
   <h5 class="widget-user-desc">({{Auth::user()->own_id}})</h5>
   </div>
   <div class="widget-user-image">
   <img class="img-circle elevation-2" src="{{asset('logo.png')}}" alt="User Avatar">
   </div>
   <div class="card-footer" style="padding-top: 2px;">
   <div class="row">
   <div class="col-sm-4 border-right">
   <div class="description-block">
   <h5 class="description-header">User Id</h5>
   <span class="description-text">{{Auth::user()->own_id}}</span>
   </div>

   </div>

   <div class="col-sm-4 border-right">
   <div class="description-block">
   <h5 class="description-header">Sponsor ID </h5>
   <span class="description-text">{{Auth::user()->sponsor_id}}</span>
   </div>

   </div>

   <div class="col-sm-4">
   <div class="description-block">
   <h5 class="description-header">Joined On</h5>
   <span class="description-text">{{Carbon\Carbon::parse(Auth::user()->created_at)->format('d-m-Y')}}</span>
   </div>

   </div>

   </div>

   </div>
   </div>

   </div>
@endif
          <div class="col-12">
            <h3>Income Details</h3>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$directIncome}}</h3>

                <p>Direct </p>
              </div>
              <div class="icon">
                <i class="fa fa-inr"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$levelIncome}}</h3>

                <p>Level </p>
              </div>
              <div class="icon">
                <i class="fa fa-inr"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$royaltyIncome}}</h3>

                <p>Royalty </p>
              </div>
              <div class="icon">
                <i class="fa fa-inr"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$rewardIncome}}</h3>

                <p>Reward </p>
              </div>
              <div class="icon">
                <i class="fa fa-inr"></i>
              </div>
            </div>
          </div>
          <div class="col-12">
            <h3>Withdraw Details</h3>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>0</h3>

                <p>Requested</p>
              </div>
              <div class="icon">
                <i class="fa fa-inr"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>0</h3>

                <p>Paid</p>
              </div>
              <div class="icon">
                <i class="fa fa-inr"></i>
              </div>
            </div>
          </div>

          <!-- ./col -->
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection
