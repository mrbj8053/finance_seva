@extends('admin.master')
@section('mainContent')
    <div class="content-wrapper" style="min-height: 1114px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{$title}} Withdraw Requests</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">{{$title}} Withdraw Requests</li>
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
                                <h3 class="card-title">{{$title}} Withdraw Requests</h3>
                            </div>

                            <div class="card-body">
                                <div  class="dataTables_wrapper dt-bootstrap4">
                                    <table class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Ownid</th>
                                                <th>Name</th>
                                                <th>Account Number</th>
                                                <th>IFSC Code</th>
                                                <th>Amount</th>
                                                <th>Admin Charge</th>
                                                <th>Net Amount</th>
                                                <th>Created On</th>
                                                <th>Status</th>
                                                @if(Auth::user()->role=='admin')

                                                <th>Action</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i=0;
                                            @endphp
                                            @foreach ($withdrawRequests as $item )
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$item->user->own_id}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->account_number}}</td>
                                                <td>{{$item->ifsc_code}}</td>
                                                <td>{{$item->amount}}</td>
                                                <td>{{$item->admin_charge}}</td>
                                                <td>{{$item->net_amount}}</td>
                                                <td>{{\Carbon\Carbon::parse($item->created_at)->format('d-m-Y h:i:s')}}</td>
                                                <td>
                                                    @if ($item->status==0)
                                                    <p class="badge bg-warning">Pending Approval</p>
                                                        @elseif ($item->status==1)
                                                    <p class="badge bg-success">Aprooved</p>
                                                    @elseif ($item->status==2)
                                                    <p class="badge bg-danger">Rejected</p>

                                                    @endif
                                                </td>
                                                @if(Auth::user()->role=='admin')

                                                <td>
                                                    @if ($item->status==0)
                                                    <a onclick="confirmAction('Do you want to Approve the request ?','{{route('withdrawRequest.update',[Crypt::encrypt($item->id),1])}}')" href="javascript:void(0);" class="btn bg-success">Approve</a>
                                                    <a onclick="confirmAction('Do you want to Reject the request ?','{{route('withdrawRequest.update',[Crypt::encrypt($item->id),2])}}')" href="javascript:void(0);" class="btn bg-danger">Reject</a>
                                                    @endif
                                                </td>
                                                @endif

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
