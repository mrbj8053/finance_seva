@extends('admin.master')
@section('mainContent')
    <div class="content-wrapper" style="min-height: 1114px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{$title}} Income</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">{{$title}} Income </li>
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
                                <h3 class="card-title">{{$title}} Income</h3>
                            </div>

                            <div class="card-body">
                                <div  class="dataTables_wrapper dt-bootstrap4">
                                    <table class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>From User</th>
                                                <th>To User</th>
                                                <th>Level</th>
                                                <th>User Name</th>
                                                <th>Income Type</th>
                                                <th>Amount</th>
                                                <th>Admin Charge</th>
                                                <th>Net Amount</th>
                                                <th>Created On</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i=0;
                                            @endphp
                                            @foreach ($incomes as $item )
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$item->fromUser->own_id}}</td>
                                                <td>{{$item->toUser->own_id}}</td>
                                                <td>{{$item->level}}</td>
                                                <td>{{$item->toUser->name}}</td>
                                                <td>{{$item->income_type}}</td>
                                                <td>{{$item->amount}}</td>
                                                <td>{{$item->admin_charge}}</td>
                                                <td>{{$item->net_amount}}</td>
                                                <td>{{\Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}</td>
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
