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
                                <h3 class="card-title">Closings Detail</h3>
                            </div>

                            <div class="card-body">
                                <div  class="dataTables_wrapper dt-bootstrap4">
                                    <table class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Date</th>
                                                <th>User ID</th>
                                                <th>Name</th>
                                                <th>Direct</th>
                                                <th>Level</th>
                                                <th>ROI</th>
                                                <th>Royalty</th>
                                                <th>Reward</th>
                                                <th>Total</th>
                                                <th>Admin Charge</th>
                                                <th>Net Amount</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i=0;
                                            @endphp
                                            @foreach ($closings as $item )

                                                @php
                                                    $total=$item->Direct+$item->Level+$item->ROI+$item->Royalty+$item->Reward;
                                                    $admin=$total*0.10;
                                                    $net=$total-$admin;
                                                @endphp
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{\Carbon\Carbon::parse($date)->format('d/m/Y')}}</td>
                                                <td>{{$item->own_id}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->Direct??0}}</td>
                                                <td>{{$item->Level??0}}</td>
                                                <td>{{$item->ROI??0}}</td>
                                                <td>{{$item->Royalty??0}}</td>
                                                <td>{{$item->Reward??0}}</td>
                                                <td>{{ $total }}</td>
                                                <td>{{ $admin }}</td>
                                                <td>{{ $net }}</td>

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
