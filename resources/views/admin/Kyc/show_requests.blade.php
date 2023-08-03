@extends('admin.master')
@section('mainContent')
    <div class="content-wrapper" style="min-height: 1114px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{$title}} KYC Requests</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">{{$title}} KYC Requests</li>
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
                                <h3 class="card-title">{{$title}} KYC Requests</h3>
                            </div>

                            <div class="card-body">
                                <div  class="dataTables_wrapper dt-bootstrap4">
                                    <table class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                @if(Auth::user()->role=='admin')
                                                <th>Action</th>
                                                @endif
                                                <th>Status</th>
                                                <th>Sr No.</th>
                                                <th>User ID</th>
                                                <th>User Name</th>
                                                <th>Bank Name</th>
                                                <th>Account Holder Name</th>
                                                <th>IFSC Code</th>
                                                <th>Account Number</th>
                                                <th>PAN Number</th>
                                                <th>Adhar Front</th>
                                                <th>Adhar Back</th>
                                                <th>PAN Image</th>
                                                <th>Passbook Image</th>
                                                <th>Cancel Cheque</th>
                                                <th>Created On</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i=0;
                                            @endphp
                                            @foreach ($kycRequests as $item )
                                            <tr>
                                                @if(Auth::user()->role=='admin')

                                                <td>
                                                    @if ($item->status==0)
                                                    <a onclick="confirmAction('Do you want to Approve the package ?','{{route('kycRequest.update',[Crypt::encrypt($item->id),1])}}')" href="javascript:void(0);" class="btn bg-success">Approve</a>
                                                    <a onclick="confirmAction('Do you want to Reject the package ?','{{route('kycRequest.update',[Crypt::encrypt($item->id),2])}}')" href="javascript:void(0);" class="btn bg-danger">Reject</a>
                                                    @endif
                                                </td>
                                                @endif
                                                <td>
                                                    @if ($item->status==0)
                                                    <p class="badge bg-warning">Pending Approval</p>
                                                        @elseif ($item->status==1)
                                                    <p class="badge bg-success">Aprooved</p>
                                                    @elseif ($item->status==2)
                                                    <p class="badge bg-danger">Rejected</p>

                                                    @endif
                                                </td>
                                                <td>{{++$i}}</td>
                                                <td>{{$item->user->own_id}}</td>
                                                <td>{{$item->user->name}}</td>
                                                <td>{{$item->bank_name}}</td>
                                                <td>{{$item->account_holder_name}}</td>
                                                <td>{{$item->ifsc_code}}</td>
                                                <td>{{$item->account_number}}</td>
                                                <td>{{$item->pan_number}}</td>
                                                <td><a target="_blank" href="{{asset($item->adhar_front_image)}}" style="width:100%" alt="">View</a></td>
                                                <td><a target="_blank" href="{{asset($item->adhar_back_image)}}" style="width:100%" alt="">View</a></td>
                                                <td><a target="_blank" href="{{asset($item->pan_image)}}" style="width:100%" alt="">View</a></td>
                                                <td><a target="_blank" href="{{asset($item->passbook_image)}}" style="width:100%" alt="">View</a></td>
                                                <td><a target="_blank" href="{{asset($item->cancel_cheque_image)}}" style="width:100%" alt="">View</a></td>
                                                <td>{{\Carbon\Carbon::parse($item->created_at)->format('d-m-Y')}}</td>



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
