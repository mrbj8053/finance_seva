@extends('admin.master')
@section('mainContent')
    <div class="content-wrapper" style="min-height: 1114px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Company</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Company</li>
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
                                <h3 class="card-title">Company</h3>
                            </div>

                            <form action="{{ route('company.update', ['company' => 1]) }}" enctype="multipart/form-data" method="post">
                                @method('PUT')
                                @csrf
                                <div class="card-body">
                                    @include('admin.message')
                                    <div class="row">
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">UPI ID</label>
                                                <input required type="text" value="{{ $company->upi_id ?? old('upi_id') }}"
                                                    name="upi_id" class="form-control @error('upi_id') is-invalid @enderror"
                                                    id="exampleInputEmail1" placeholder="Enter upi id">
                                                @error('upi_id')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">QR Code</label>
                                                <input  type="file" value="{{ $company->qr_code ?? old('qr_code') }}"
                                                    name="qr_code" class="form-control @error('qr_code') is-invalid @enderror"
                                                    id="exampleInputEmail1" placeholder="QR Code">
                                                    @if (!empty($company->qr_code))
                                                        <img src="{{asset($company->qr_code)}}" style="width:200px;">
                                                    @endif
                                                @error('qr_code')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4 col-lg-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Plan PDF</label>
                                                <input  type="file" value="{{ $company->plan_pdf ?? old('plan_pdf') }}"
                                                    name="plan_pdf" class="form-control @error('plan_pdf') is-invalid @enderror"
                                                    id="exampleInputEmail1" placeholder="Plan PDF">
                                                    @if (!empty($company->plan_pdf))
                                                        <img src="{{asset($company->plan_pdf)}}" style="width:200px;">
                                                    @endif
                                                @error('plan_pdf')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-12 col-lg-12">
                                            <div class="txtEditor" ></div>

                                            <div class="form-group d-none">
                                                <label for="exampleInputEmail1">News Popup</label>
                                                <textarea name="news"  id="newsEditor" class=" form-control @error('news') is-invalid @enderror" id="news" cols="30" rows="10">{{ $company->news ?? old('news') }}</textarea>
                                                @error('news')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="col-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input required type="text" value="{{ $company->name ?? old('name') }}"
                                                    name="name" class="form-control @error('name') is-invalid @enderror"
                                                    id="exampleInputEmail1" placeholder="Enter company name">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email</label>
                                                <input required type="email" value="{{ $company->email ?? old('email') }}"
                                                    name="email" class="form-control @error('email') is-invalid @enderror"
                                                    id="exampleInputEmail1" placeholder="Enter company email">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Mobile </label>
                                                <input required type="numeric" value="{{ $company->mobile ?? old('mobile') }}"
                                                    name="mobile"
                                                    class="form-control @error('mobile') is-invalid @enderror"
                                                    id="exampleInputEmail1" placeholder="Enter company mobile">
                                                @error('mobile')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Address</label>
                                                <input required type="address"
                                                    value="{{ $company->address ?? old('address') }}" name="address"
                                                    class="form-control @error('address') is-invalid @enderror"
                                                    id="exampleInputEmail1" placeholder="Enter company address">
                                                @error('address')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div> --}}
                                        {{-- <div class="col-12 row">
                                            <div class="col-12">
                                                <h2 style="background: #ebeda3;padding: 5px;">Income Settings</h2>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Level Income Type</label>
                                                    <select required name="level_income_type"
                                                        class="form-control @error('level_income_type') is-invalid @enderror"
                                                        id="">
                                                        <option value="Packagewise"
                                                            @if ($company->level_income_type == 'Packagewise') selected @endif>Packagewise
                                                        </option>
                                                        <option value="All"
                                                            @if ($company->level_income_type == 'All' || !empty(old('level_income_type'))) selected @endif>All</option>
                                                    </select>
                                                    @error('level_income_type')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="level_income_levels">Levels for level income </label>
                                                    <input required type="numeric"
                                                        value="{{ $company->level_income_levels ?? old('level_income_levels') }}"
                                                        name="level_income_levels"
                                                        class="form-control @error('level_income_levels') is-invalid @enderror"
                                                        id="exampleInputEmail1" placeholder="Enter levels for level income">
                                                    <small>Will not be counted if level income type is packagewise</small>
                                                    @error('level_income_levels')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Reward Income Type</label>
                                                    <select required name="reward_income_type"
                                                        class="form-control @error('reward_income_type') is-invalid @enderror"
                                                        id="">
                                                        <option value="Packagewise"
                                                            @if ($company->reward_income_type == 'Packagewise') selected @endif>Packagewise
                                                        </option>
                                                        <option value="All"
                                                            @if ($company->reward_income_type == 'All' || !empty(old('reward_income_type'))) selected @endif>All</option>
                                                    </select>
                                                    @error('reward_income_type')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 row">
                                            <div class="col-12">
                                                <h2 style="background: #ebeda3;padding: 5px;">KYC Settings</h2>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <input  type="checkbox" value="1" @if($company->bank_name) checked @endif id="bank_name"
                                                        name="bank_name"
                                                        class=" @error('bank_name') is-invalid @enderror">
                                                    <label for="bank_name">Bank Name</label>
                                                    @error('bank_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <input  type="checkbox" value="1" @if($company->account_holder_name) checked @endif
                                                        id="account_holder_name" name="account_holder_name"
                                                        class=" @error('account_holder_name') is-invalid @enderror">
                                                    <label for="account_holder_name">Account Holder Name</label>
                                                    @error('account_holder_name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <input  type="checkbox" value="1" id="ifsc_code" @if($company->ifsc_code) checked @endif
                                                        name="ifsc_code"
                                                        class=" @error('ifsc_code') is-invalid @enderror">
                                                    <label for="ifsc_code">IFSC Code</label>
                                                    @error('ifsc_code')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <input  type="checkbox" value="1" id="account_number" @if($company->account_number) checked @endif
                                                        name="account_number"
                                                        class=" @error('account_number') is-invalid @enderror">
                                                    <label for="account_number">Account Number</label>
                                                    @error('account_number')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12 row">
                                            <div class="col-12">
                                                <h2 style="background: #ebeda3;padding: 5px;">KYC Image Settings</h2>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <input  type="checkbox" value="1" id="adhar_front_image" @if($company->adhar_front_image) checked @endif
                                                        name="adhar_front_image"
                                                        class=" @error('adhar_front_image') is-invalid @enderror">
                                                    <label for="adhar_front_image">Adhar Front Image</label>
                                                    @error('adhar_front_image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <input  type="checkbox" value="1" id="adhar_back_image" @if($company->adhar_back_image) checked @endif
                                                        name="adhar_back_image"
                                                        class=" @error('adhar_back_image') is-invalid @enderror">
                                                    <label for="adhar_back_image">Adhar Back Image</label>
                                                    @error('adhar_back_image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <input  type="checkbox" value="1" id="pan_image" @if($company->pan_image) checked @endif
                                                        name="pan_image"
                                                        class=" @error('pan_image') is-invalid @enderror">
                                                    <label for="pan_image">PAN Image</label>
                                                    @error('pan_image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <input  type="checkbox" value="1" id="passbook_image" @if($company->passbook_image) checked @endif
                                                        name="passbook_image"
                                                        class=" @error('passbook_image') is-invalid @enderror">
                                                    <label for="passbook_image">Passbook Image</label>
                                                    @error('passbook_image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 row">
                                            <div class="col-12">
                                                <h2 style="background: #ebeda3;padding: 5px;">Withdraw Settings</h2>
                                            </div>
                                            <div class="col-3">
                                                <div class="form-group">
                                                    <label for="withdraw_minimum">Withdraw Minimum</label>
                                                    <input required type="number"  value="{{ $company->withdraw_minimum ?? old('withdraw_minimum') }}" id="withdraw_minimum"
                                                        name="withdraw_minimum"
                                                        class="form-control @error('withdraw_minimum') is-invalid @enderror">
                                                        <small>Enter 0 for no limit</small>
                                                    @error('withdraw_minimum')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-success"
                                                    value="Update company details">
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
