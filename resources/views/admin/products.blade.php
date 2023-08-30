@extends('admin.master')
@section('mainContent')
    <div class="content-wrapper" style="min-height: 1114px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Products</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
                            <li class="breadcrumb-item active">Products </li>
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
                                <h3 class="card-title">Products </h3>
                            </div>

                            <div class="card-body">
                                @include('admin.message')
                                <div class="row">
                                <div class="col-12 col-md-6 col-lg-6">
                                    @foreach ($packages as $item)


                                    <div class="row" style="border: 1px solid #cacaca;border-radius: 10px;box-shadow: 3px 8px 7px #cacaca;">
                                        <div class="col-12 p-0 pb-1">
                                            <img src="{{asset('solar.gif')}}" style="    border-radius: 10px;height:150px" class="w-100"  alt="">
                                            <div class="pl-2">
                                            <h3>Rs. {{$item->entry_amount}}</h3>
                                            <h5 class="text-red">Cycle : <strong>150</strong>Days</h5>
                                            <h5 class="text-blue">Daily : Rs. <strong>{{$item->daily}}</strong></h5>
                                            @if($item->status==1)
                                            <a href="{{route('packageRequest.index',$item->id)}}" class="btn btn-primary">Buy Now</a>
                                            @else
                                            <a href="javascript:void(0);" class="btn btn-primary">Coming soon..</a>
                                            @endif
                                        </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            </div>

                        </div>

                    </div>

                </div>


            </div>

        </section>

    </div>
@endsection
