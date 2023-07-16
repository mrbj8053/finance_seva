@extends('admin.master')
@section('mainContent')
    <div class="content-wrapper" style="min-height: 1114px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Packages</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Packages</li>
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
                            <div class="card-header" style="
                            display: flex;
                            justify-content: space-between;
                            flex-wrap: nowrap;
                            flex-direction: row;
                        ">
                                <h3 class="card-title">Packages</h3>
                                <a  href="{{route('package.create')}}" class="btn btn-primary">Add Package</a>
                            </div>

                            <div class="card-body">
                                <div  class="dataTables_wrapper dt-bootstrap4">
                                    <table class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Package Name</th>
                                                <th>Entry Amount</th>
                                                <th>Direct Income</th>
                                                <th>Levels</th>
                                                <th>Rewards</th>
                                                <th>Created On</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i=0;
                                            @endphp
                                            @foreach ($packageList as $package )
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$package->package_name}}</td>
                                                <td>{{$package->entry_amount}}</td>
                                                <td>{{$package->direct_income}}</td>
                                                <td>{{$package->levels}}</td>
                                                <td>{{$package->rewards==0?'Yes':'No'}}</td>
                                                <td>{{\Carbon\Carbon::parse($package->created_at)->format('d-m-Y')}}</td>
                                                <td>
                                                    @if ($package->is_disabled==0)
                                                    <p class="badge bg-success">Active</p>
                                                        @else
                                                    <p class="badge bg-danger">Inactive</p>

                                                    @endif
                                                </td>
                                                <td>
                                                    <a  href="{{route('package.edit',['package'=>$package->id])}}" ><i class="fa fa-pencil-square"></i></a>

                                                    @if ($package->is_disabled==0)
                                                    <a onclick="confirmAction('Do you want to Deactivate the package ?','{{route('changePackageStatus',[Crypt::encrypt($package->id)])}}')" href="javascript:void(0);" class="btn bg-danger">Deactivate</a>
                                                        @else
                                                    <a onclick="confirmAction('Do you want to Activate the package ?','{{route('changePackageStatus',[Crypt::encrypt($package->id)])}}')" href="javascript:void(0);" class="btn bg-success">Activate</a>

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
