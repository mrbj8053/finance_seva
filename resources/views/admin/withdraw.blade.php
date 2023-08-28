@extends('admin.master')
@section('mainContent')
    <div class="content-wrapper" style="min-height: 1114px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Withdraw</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Withdraw </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Withdraw </h3>
                            </div>

                            <div class="card-body">
                                @include('admin.message')
                                <form action="{{route('withdrawApplyPost')}}" method="POST">
                                @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            You current balance is <strong>{{$balance}} </strong>Rs
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <label for="transaction_id">Enter Amount</label>
                                                <input required  value="{{old('amount')}}"
                                                    name="amount"
                                                    class="form-control @error('amount') is-invalid @enderror"
                                                    id="amount" placeholder="Enter transaction id ">
                                                @error('amount')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="transaction_id">Enter Name</label>
                                                <input required value="{{old('name')}}"
                                                    name="name"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    id="name" placeholder="Enter name">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="transaction_id">Enter Account Number</label>
                                                <input required value="{{old('account_number')}}"
                                                    name="account_number"
                                                    class="form-control @error('account_number') is-invalid @enderror"
                                                    id="account_number" placeholder="Enter accout number">
                                                @error('account_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="transaction_id">Enter IFSC Code</label>
                                                <input required value="{{old('ifsccode')}}"
                                                    name="ifsccode"
                                                    class="form-control @error('ifsccode') is-invalid @enderror"
                                                    id="ifsccode" placeholder="Enter IFSC Code ">
                                                @error('ifsccode')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-success"
                                                    value="Apply Withdraw">
                                            </div>
                                        </div>

                                    </div>
                                </form>

                            </div>

                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Withdraw History</h3>
                            </div>

                            <div class="card-body">
                                <div  class="dataTables_wrapper dt-bootstrap4">
                                    <table class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Amount</th>
                                                <th>Admin Charge</th>
                                                <th>Net Amount</th>
                                                <th>Created On</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i=0;
                                            @endphp
                                            @foreach ($withdraws as $item )
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$item->amount}}</td>
                                                <td>{{$item->admin_charge}}</td>
                                                <td>{{$item->net_amount}}</td>
                                                <td>{{\Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}</td>
                                                <td>
                                                    @if($item->status==0)
                                                    <p class="badge bg-warning">Pending</p>
                                                    @elseif($item->status==1)
                                                    <p class="badge bg-success">Aprooved</p>
                                                    @elseif($item->status==2)
                                                    <p class="badge bg-danger">Rejected</p>
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
