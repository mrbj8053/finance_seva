@extends('admin.master')
@section('mainContent')
    <div class="content-wrapper" style="min-height: 1114px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> {{$title}} Business</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">{{$title}} Business</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        @include('admin.message')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{$title}} Business</h3>
                            </div>

                            <div class="card-body">
                                <div  class="dataTables_wrapper dt-bootstrap4">
                                    <table class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Ownid</th>
                                                <th>Package</th>
                                                <th>Sponsor Id</th>
                                                <th>Active On</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i=0;
                                                $totalBusiness=0;
                                            @endphp
                                            @foreach ($business as $packageRequest )
                                            @php
                                                $package=$packageRequest->packageApplied;
                                                $user=$packageRequest->user;
                                                $totalBusiness+=$package->entry_amount;
                                            @endphp
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td><a href="{{route('loginUser',Crypt::encrypt($user->id))}}">{{$user->name}}</a></td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->own_id}}</td>
                                                <td>{{$package->package_name}}</td>
                                                <td>{{$user->sponsor_id}}</td>
                                                <td>{{\Carbon\Carbon::parse($packageRequest->updated_at)->format('d-m-Y')}}</td>



                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                    <h3>Total Business : <strong>{{$totalBusiness}}</strong></h3>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>
@endsection
