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
                            <li class="breadcrumb-item"><a href="{{route('package.index')}}">Packages</a></li>
                            <li class="breadcrumb-item active">Add Package</li>
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
                                <h3 class="card-title">Packages</h3>
                            </div>

                           <form action="@if(isset($package)) {{route('package.update',['package'=>$package])}} @else {{route('package.store')}} @endif" method="post">
                            @if(isset($package))
                            @method('PATCH')
                            @endif
                            @csrf
                            <div class="card-body">
                                @include('admin.message')
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Package Name</label>
                                            <input required type="text" value="{{ $package->package_name??old('package_name')}}" name="package_name" class="form-control @error('package_name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter package name">
                                            @error('package_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Entry Amount</label>
                                            <input required type="numeric" value="{{ $package->entry_amount??old('entry_amount')}}" name="entry_amount" class="form-control @error('entry_amount') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter package amount">
                                            @error('entry_amount')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Direct Income(%) </label>
                                            <input required type="numeric" value="{{ $package->direct_income??old('direct_income')}}" name="direct_income" class="form-control @error('direct_income') is-invalid @enderror" title="Direct income will be distributed directly to the sponsor if he is activated." id="exampleInputEmail1" placeholder="Enter direct income percentage">
                                            @error('direct_income')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Total Levels</label>
                                            <input required type="numeric" value="{{ $package->levels??old('levels')}}" name="levels" class="form-control @error('levels') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter number of levels">
                                            @error('levels')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Rewards</label>
                                            <select  required name="rewards"  class="form-control @error('rewards') is-invalid @enderror" id="">
                                                <option value="1" @if($package->rewards??old('rewards')==1) selected @endif>Yes</option>
                                                <option value="0" @if($package->rewards??old('rewards')==0 || !empty(old('rewards'))) selected @endif>No</option>
                                            </select>
                                            @error('rewards')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success" value="@if(isset($package)) Update @else Add @endif Package">
                                            </div>
                                    </div>
                                </div>


                                </div>
                           </form>
                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>
@endsection
