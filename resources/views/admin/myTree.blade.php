@extends('admin.master')
@section('mainContent')
    <div class="content-wrapper" style="min-height: 1114px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Tree</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Tree</li>
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
                                <h3 class="card-title">Showing tree for {{ $user->own_id . '(' . $user->name . ')' }}</h3>
                            </div>

                            <div class="card-body text-center">
                                <img style="width:100px"
                                    src="@if ($user->is_disabled == 1) {{ asset('userblocked.png') }} @elseif($user->is_active == 1) {{ asset('useractive.png') }} @else {{ asset('userinactive.png') }} @endif"
                                    alt="">
                                <h5><strong>{{ $user->name }}</strong></h5>
                                <p>({{ $user->own_id }})</p>
                                <h5>Level -1 </h5>
                                <div style="display:flex">
                                    @foreach ($childs1 as $item)

                                        <div style="margin-left:10px;margin-right:10px;padding: 10px;box-shadow: 1px 1px 5px #cacaca;border-radius: 8px;">
                                            <img style="width:100px"
                                                src="@if ($item->user->is_disabled == 1) {{ asset('userblocked.png') }} @elseif($item->user->is_active == 1) {{ asset('useractive.png') }} @else {{ asset('userinactive.png') }} @endif"
                                                alt="">
                                            <h6><strong>{{ $item->user->name }}</strong></h6>
                                            <p>({{ $item->user->own_id }})</p>
                                            <a style="cursor: pointer;" href="{{route('levelTree',$item->user->own_id)}}"><i class="fa fa-tree"></i> Show Tree</a>
                                        </div>
                                    @endforeach
                                </div>
                                <br>
                                <br>
                                <h5>Level -2  </h5>

                                <div style="display:flex;margin-top:30px">
                                    @foreach ($childs2 as $item)
                                        <div style="margin-left:10px;margin-right:10px;padding: 10px;box-shadow: 1px 1px 5px #cacaca;border-radius: 8px;">
                                            <img style="width:100px"
                                                src="@if ($item->user->is_disabled == 1) {{ asset('userblocked.png') }} @elseif($item->user->is_active == 1) {{ asset('useractive.png') }} @else {{ asset('userinactive.png') }} @endif"
                                                alt="">
                                            <h6><strong>{{ $item->user->name }}</strong></h6>
                                            <p>({{ $item->user->own_id }})</p>
                                            <a style="cursor: pointer;" href="{{route('levelTree',$item->user->own_id)}}"><i class="fa fa-tree"></i> Show Tree</a>
                                        </div>
                                    @endforeach


                                </div>
                                <br>
                                <br>
                                <h5>Level -3  </h5>

                                <div style="display:flex;margin-top:30px">
                                    @foreach ($childs3 as $item)
                                        <div style="margin-left:10px;margin-right:10px;padding: 10px;box-shadow: 1px 1px 5px #cacaca;border-radius: 8px;">
                                            <img style="width:100px"
                                                src="@if ($item->user->is_disabled == 1) {{ asset('userblocked.png') }} @elseif($item->user->is_active == 1) {{ asset('useractive.png') }} @else {{ asset('userinactive.png') }} @endif"
                                                alt="">
                                            <h6><strong>{{ $item->user->name }}</strong></h6>
                                            <p>({{ $item->user->own_id }})</p>
                                            <a style="cursor: pointer;" href="{{route('levelTree',$item->user->own_id)}}"><i class="fa fa-tree"></i> Show Tree</a>
                                        </div>
                                    @endforeach


                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>
@endsection
