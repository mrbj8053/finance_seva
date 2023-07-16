@extends('admin.master')
@section('mainContent')
    <div class="content-wrapper" style="min-height: 1114px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>KYC</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Apply KYC</li>
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
                                <h3 class="card-title">KYC</h3>
                            </div>

                            <form action="{{ route('kycRequest.apply') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    @include('admin.message')
                                    @if(empty($kyc) && (!empty($kyc) && $kyc->status!=0))
                                    <div class="alert alert-warning">
                                        <strong>Warning !</strong> Enter carefully , you can't change your KYC details after verification
                                      </div>
                                    @elseif (!empty($kyc) && $kyc->status==0)
                                      <div class="alert alert-warning">
                                        <strong>Warning !</strong> Details updated, KYC verification under progress, you can change them before approoval.
                                      </div>
                                      @elseif(!empty($kyc) && $kyc->status==1)
                                      <div class="alert alert-success">
                                        <strong>Success !</strong> KYC verified successfully.
                                      </div>
                                      @elseif(!empty($kyc) && $kyc->status==2)
                                      <div class="alert alert-danger">
                                        <strong>Rejected !</strong> KYC rejected please update your details.
                                      </div>
                                    @endif
                                    <div class="row">

                                        <div class="col-6 col-md-4">
                                            <div class="form-group">
                                                <label for="bank_name">Bank Name</label>
                                                <input @if(!empty($kyc) && $kyc->status==1) disabled @endif required type="text"
                                                    value="{{  $kyc->bank_name??old('bank_name') }}"
                                                    name="bank_name"
                                                    class="form-control @error('bank_name') is-invalid @enderror"
                                                    id="bank_name" placeholder="Enter transaction id ">
                                                @error('bank_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="form-group">
                                                <label for="account_holder_name">Account Holder Name</label>
                                                <input @if(!empty($kyc) && $kyc->status==1) disabled @endif required type="text"
                                                    value="{{  $kyc->account_holder_name??old('account_holder_name') }}"
                                                    name="account_holder_name"
                                                    class="form-control @error('account_holder_name') is-invalid @enderror"
                                                    id="account_holder_name" placeholder="Enter transaction id ">
                                                @error('account_holder_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="form-group">
                                                <label for="ifsc_code">IFSC Code</label>
                                                <input @if(!empty($kyc) && $kyc->status==1) disabled @endif required type="text"
                                                    value="{{  $kyc->ifsc_code??old('ifsc_code') }}"
                                                    name="ifsc_code"
                                                    class="form-control @error('ifsc_code') is-invalid @enderror"
                                                    id="ifsc_code" placeholder="Enter transaction id ">
                                                @error('ifsc_code')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="form-group">
                                                <label for="account_number">Account Number</label>
                                                <input @if(!empty($kyc) && $kyc->status==1) disabled @endif @if(empty($kyc->status)) required  @endif type="text"
                                                    value="{{  $kyc->account_number??old('account_number') }}"
                                                    name="account_number"
                                                    class="form-control @error('account_number') is-invalid @enderror"
                                                    id="account_number" placeholder="Enter transaction id ">
                                                @error('account_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="form-group">
                                                <label for="pan_number">PAN Number</label>
                                                <input @if(!empty($kyc) && $kyc->status==1) disabled @endif @if(empty($kyc->status)) required  @endif type="text"
                                                    value="{{  $kyc->pan_number??old('pan_number') }}"
                                                    name="pan_number"
                                                    class="form-control @error('pan_number') is-invalid @enderror"
                                                    id="pan_number" placeholder="Enter transaction id ">
                                                @error('pan_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <p style="border: 1px dotted; padding: 3px;background: antiquewhite;"> KYC Images</p>
                                        </div>
                                        <div class="col-6 col-md-4 ">
                                            <div class="m-2 customCardCorner">
                                                <label for="payment_screenshot">Adhar Front Image</label>
                                                <img style="width: 100%" src="{{!empty($kyc->adhar_front_image)?asset($kyc->adhar_front_image):asset('noimage.png')}}" alt="">
                                                <input @if(!empty($kyc) && $kyc->status==1) disabled @endif @if(  empty($kyc) || (!empty($kyc) && $kyc->status==0)) required  @endif  type="file"
                                                    value="{{ old('payment_screenshot') }}"
                                                    name="adhar_front_image"
                                                    class="form-control @error('adhar_front_image') is-invalid @enderror"
                                                    id="adhar_front_image" placeholder="Enter transaction id ">
                                                @error('adhar_front_image')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            </div>
                                            <div class="col-6 col-md-4 ">
                                                <div class="m-2 customCardCorner">
                                                    <label for="adhar_back_image">Adhar Back Image</label>
                                                    <img style="width: 100%" src="{{!empty($kyc->adhar_back_image)?asset($kyc->adhar_back_image):asset('noimage.png')}}" alt="">
                                                    <input @if(!empty($kyc) && $kyc->status==1) disabled @endif @if(  empty($kyc) || (!empty($kyc) && $kyc->status==0)) required  @endif  type="file"
                                                        value="{{ old('adhar_back_image') }}"
                                                        name="adhar_back_image"
                                                        class="form-control @error('adhar_back_image') is-invalid @enderror"
                                                        id="adhar_back_image" placeholder="Enter transaction id ">
                                                    @error('adhar_back_image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                </div>
                                                <div class="col-6 col-md-4 ">
                                                    <div class="m-2 customCardCorner">
                                                        <label for="pan_image">PAN Image</label>
                                                        <img style="width: 100%" src="{{!empty($kyc->pan_image)?asset($kyc->pan_image):asset('noimage.png')}}" alt="">
                                                        <input @if(!empty($kyc) && $kyc->status==1) disabled @endif @if(  empty($kyc) || (!empty($kyc) && $kyc->status==0)) required  @endif  type="file"
                                                            value="{{ old('pan_image') }}"
                                                            name="pan_image"
                                                            class="form-control @error('pan_image') is-invalid @enderror"
                                                            id="pan_image" placeholder="Enter transaction id ">
                                                        @error('pan_image')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    </div>
                                                    <div class="col-6 col-md-4 ">
                                                        <div class="m-2 customCardCorner">
                                                            <label for="passbook_image">Passbook Image</label>
                                                            <img style="width: 100%" src="{{!empty($kyc->passbook_image)?asset($kyc->passbook_image):asset('noimage.png')}}" alt="">
                                                            <input @if(!empty($kyc) && $kyc->status==1) disabled @endif @if(  empty($kyc) || (!empty($kyc) && $kyc->status==0)) required  @endif  type="file"
                                                                value="{{ old('passbook_image') }}"
                                                                name="passbook_image"
                                                                class="form-control @error('passbook_image') is-invalid @enderror"
                                                                id="passbook_image" placeholder="Enter transaction id ">
                                                            @error('passbook_image')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        </div>
                                                        <div class="col-6 col-md-4 ">
                                                            <div class="m-2 customCardCorner">
                                                                <label for="cancel_cheque_image">Cancel Cheque Image</label>
                                                                <img style="width: 100%" src="{{!empty($kyc->cancel_cheque_image)?asset($kyc->cancel_cheque_image):asset('noimage.png')}}" alt="">
                                                                <input @if(!empty($kyc) && $kyc->status==1) disabled @endif @if(  empty($kyc) || (!empty($kyc) && $kyc->status==0)) required  @endif  type="file"
                                                                    value="{{ old('cancel_cheque_image') }}"
                                                                    name="cancel_cheque_image"
                                                                    class="form-control @error('cancel_cheque_image') is-invalid @enderror"
                                                                    id="cancel_cheque_image" placeholder="Enter transaction id ">
                                                                @error('cancel_cheque_image')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                            </div>

                                        </div>


                                        @if(empty($kyc) || $kyc->status==0 || $kyc->status==2)
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-success"
                                                    value="Apply for KYC">
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
