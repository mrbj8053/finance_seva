@extends('admin.master')
@section('mainContent')
    <div class="content-wrapper" style="min-height: 1114px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Closings Applied</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Closings Applied </li>
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
                                <h3 class="card-title">Closings Applied</h3>
                            </div>

                            <div class="card-body">
                                <div  class="dataTables_wrapper dt-bootstrap4">
                                    <table class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Sr No.</th>
                                                <th>Direct</th>
                                                <th>Level</th>
                                                <th>ROI</th>
                                                <th>Royalty</th>
                                                <th>Reward</th>
                                                <th>Date</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $i=0;
                                            @endphp
                                            @foreach ($closings as $item )
                                            <tr>
                                                <td>{{++$i}}</td>
                                                <td>{{$item->direct}}</td>
                                                <td>{{$item->level}}</td>
                                                <td>{{$item->roi}}</td>
                                                <td>{{$item->royalty}}</td>
                                                <td>{{$item->reward}}</td>
                                                <td>{{\Carbon\Carbon::parse($item->created_at)->format('d/m/Y')}}</td>
                                                <td>
                                                    <a href="{{route('closingsDetail',$item->created_at)}}" class="btn btn-primary">Show Detail</a>
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
