@extends('admin.master')
@section('mainContent')
    <div class="content-wrapper" style="min-height: 1114px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>All Users</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">All Users</li>
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
                                <h3 class="card-title">All Users</h3>
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
                                                <th>Sponsor Id</th>
                                                <th>Parent Id</th>
                                                <th>Join On</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i=0;
                                            @endphp
                                            @foreach ($userList as $user )
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->own_id}}</td>
                                                <td>{{$user->sponsor_id}}</td>
                                                <td>{{$user->parent_id}}</td>
                                                <td>{{\Carbon\Carbon::parse($user->created_at)->format('d-m-Y')}}</td>
                                                <td>
                                                    @if ($user->is_active==0)
                                                    <p class="badge bg-success">User Active</p>
                                                        @else
                                                    <p class="badge bg-danger">User Inactive</p>

                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($user->is_disabled==0)
                                                    <a onclick="confirmAction('Do you want to Deactivate the user ?','{{route('changeUserStatus',[Crypt::encrypt($user->id)])}}')" href="javascript:void(0);" class="btn bg-danger">Block</a>
                                                        @else
                                                    <a onclick="confirmAction('Do you want to Activate the user ?','{{route('changeUserStatus',[Crypt::encrypt($user->id)])}}')" href="javascript:void(0);" class="btn bg-success">UnBlock</a>

                                                    @endif
                                                </td>

                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>
@endsection
