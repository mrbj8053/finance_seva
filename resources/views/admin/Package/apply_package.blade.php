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
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Apply Package</li>
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

                                    @if (!empty($current) && $current->status==0)
                                      <div class="alert alert-warning">
                                        <strong>Warning !</strong> You have applied for a package , please wait before it is approoved.
                                      </div>
                                    @endif
                            <form action="{{ route('packageRequest.apply') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    @include('admin.message')
                                    <div class="row">
                                        <div class="col-6">
                                            <h3>Scan QR Code</h3>
                                            <img style="width: 100%" src="{{asset($company->qr_code)}}" alt="">
                                        </div>
                                        <div class="col-6">
                                            <h3>Copy UPI ID</h3>
                                            <h5 onclick="copyToClipboard('{{$company->upi_id}}')" style="background-color:bisque;border:1px dotted black;padding:5px;border-radius:8px;margin-top:20px">{{$company->upi_id}} &nbsp; <i class="fa-solid fa-copy"></i></h5>
                                        </div>
                                        <div class="col-6"></div>
                                        <div class="col-12 col-md-4 d-none">
                                            <div class="form-group">
                                                <label for="package">Select Package</label>
                                                <select  required name="package"
                                                    class="form-control @error('package') is-invalid @enderror"
                                                    id="">
                                                    @foreach ($packages as $pkg)
                                                        <option value="{{$pkg->id}}"
                                                            @if ($pkg->id ==old('package') || $pkg->id==$pkid) selected @endif>{{$pkg->package_name."(".$pkg->entry_amount.")" }}</option>
                                                    @endforeach
                                                </select>
                                                @error('package')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group">
                                                <label for="transaction_id">Transaction Number</label>
                                                <input   type="text"
                                                    value="{{ old('transaction_id') }}"
                                                    name="transaction_id"
                                                    class="form-control @error('transaction_id') is-invalid @enderror"
                                                    id="transaction_id" placeholder="Enter transaction id ">
                                                    <small>Optional</small>
                                                @error('transaction_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <label for="payment_screenshot">Payment Screenshot</label>
                                                    <input  required  type="file"
                                                        value="{{ old('payment_screenshot') }}"
                                                        name="payment_screenshot"
                                                        class="form-control @error('payment_screenshot') is-invalid @enderror"
                                                        id="payment_screenshot" placeholder="Enter transaction id ">
                                                    @error('payment_screenshot')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <br>
                                                    @if(!empty($current))
                                                        <img src="{{asset($current->payment_screenshot)}}" width="100%" alt=""/>
                                                        @endif
                                                </div>
                                        </div>
                                        @if($current->status!=0)
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-success"
                                                    value="Apply Package">
                                            </div>
                                        </div>
                                    @endif

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
