@extends('admin.master')
@section('mainContent')
    <div class="content-wrapper" style="min-height: 1114px;">

        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Profile</li>
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
                                <h3 class="card-title">Profile</h3>
                            </div>
                            <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    @include('admin.message')
                                    <div class="row">
                                        <div class="col-6 col-md-4">
                                            <div class="form-group">
                                                <label for="transaction_id">Name</label>
                                                <input required type="text" value="{{ Auth::user()->name }}"
                                                    name="name" class="form-control @error('name') is-invalid @enderror"
                                                    id="name" placeholder="Enter transaction id ">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="form-group">
                                                <label for="transaction_id">Email</label>
                                                <input disabled type="text" value="{{ Auth::user()->email }}"
                                                    name="name" class="form-control @error('name') is-invalid @enderror"
                                                    id="name" placeholder="Enter transaction id ">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="form-group">
                                                <label for="transaction_id">Sponsor Id</label>
                                                <input disabled type="text" value="{{ Auth::user()->sponsor_id }}"
                                                    name="name" class="form-control @error('name') is-invalid @enderror"
                                                    id="name" placeholder="Enter transaction id ">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-success" value="Update Profile">
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </form>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Change Password</h3>
                            </div>
                            <form action="{{ route('profile.password.chage') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 col-md-4">
                                            <div class="form-group">
                                                <label for="transaction_id">Old Password</label>
                                                <input required type="text"
                                                    name="old_password" class="form-control @error('old_password') is-invalid @enderror"
                                                    id="old_password" placeholder="Enter old password ">
                                                @error('old_password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="form-group">
                                                <label for="transaction_id">New Password</label>
                                                <input required type="text"
                                                    name="password" class="form-control @error('password') is-invalid @enderror"
                                                    id="password" placeholder="Enter new password ">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <div class="form-group">
                                                <label for="password_confirmation">Confirm Password</label>
                                                <input required type="text"
                                                    name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"
                                                    id="password_confirmation" placeholder="Confirm new password">
                                                @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-success" value="Change Password">
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
