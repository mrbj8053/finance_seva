@extends('admin.master')
@section('mainContent')
    <div class="content-wrapper" style="min-height: 1114px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Closings Detail</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Closings Detail </li>
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
                                <h3 class="card-title">Closings Detail for {{\Carbon\Carbon::parse($date)->format('d/m/Y')}}</h3>
                            </div>

                            <div class="card-body">
                                <div  class="dataTables_wrapper dt-bootstrap4">
                                    <table class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>User ID</th>
                                                <th>Name</th>
                                                <th>Bank Name</th>
                                                <th>Account Holder</th>
                                                <th>Account Number</th>
                                                <th>IFSC Code</th>
                                                <th>ROI</th>
                                                <th>Direct</th>
                                                <th>Level</th>
                                                <th>Reward</th>
                                                <th>Royalty</th>
                                                <th>Total</th>
                                                <th>Admin Charge</th>
                                                <th>Net Amount</th>
                                                <th>Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i=0;
                                            @endphp
                                            @foreach ($closings as $item )

                                                @php
                                                    $total=$item->direct+$item->level+$item->roi+$item->royalty+$item->reward;
                                                    $admin=$total*0.10;
                                                    $net=$total-$admin;
                                                @endphp
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$item->own_id}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->bank_name}}</td>
                                                <td>{{$item->account_holder_name}}</td>
                                                <td>{{$item->account_number}}</td>
                                                <td>{{$item->ifsc_code}}</td>
                                                <td>{{$item->roi??0}}</td>
                                                <td>{{$item->direct??0}}</td>
                                                <td>{{$item->level??0}}</td>
                                                <td>{{$item->reward??0}}</td>
                                                <td>{{$item->royalty??0}}</td>
                                                <td>{{ $total }}</td>
                                                <td>{{ $admin }}</td>
                                                <td>{{ $net }}</td>
                                                <td>
                                                    @if($item->is_paid==0)
                                                        <button type="button" onclick="payUser('{{$item->id}}',this)" class="btn btn-primary">Pay Now</button>
                                                    @else
                                                    <button type="button"  class="btn btn-success">Already Paid</button>

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
