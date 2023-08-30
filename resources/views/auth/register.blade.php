<!doctype html>
<html lang="en" class="h-100">


<!-- Mirrored from maxartkiller.com/website/mobileux2/HTML/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Aug 2023 15:27:01 GMT -->
<head>

    <title>{{env('APP_NAME')}}| Register</title>
@include('auth.authHead')
</head>

<body class="body-scroll d-flex flex-column h-100 dark-bg" data-page="signin">

    <!-- loader section -->
    <div class="container-fluid loader-wrap">

        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="loader-cube-wrap mx-auto">
                    <div class="loader-cube1 loader-cube"></div>
                    <div class="loader-cube2 loader-cube"></div>
                    <div class="loader-cube4 loader-cube"></div>
                    <div class="loader-cube3 loader-cube"></div>
                </div>
                <p>Great things ahead!<br><strong>Please wait...</strong></p>
            </div>
        </div>
    </div>
    <!-- loader section ends -->

    <main class="container-fluid h-100">
        <marquee behavior="" direction="">
            <h2 style="color:red;background-color:bisque">This is a Demo version | Created for testing purpose</h2>
            </marquee>
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto mt-auto pt-4 text-center mb-100px d-grid gap-2">
                <form action="{{route('register')}}" method="post">
                    @csrf
                <h3 class="mb-1">Make your move easy</h3>
                <p class="text-muted mb-4">Sign up with {{env('APP_NAME')}} now by<br>entering your details</p>
                <div class="form-group form-floating  @error('sponsarId') is-invalid @enderror">
                    <input id="sponsorId" type="text" onkeyup="checkSponsor(this.value)" maxlength="10" minlength="10" class="form-control" name="sponsorId" value="{{ isset($_GET['sponsor'])?$_GET['sponsor']:old('sponsorId') }}" required autocomplete="name" autofocus placeholder="Enter Sponsor ID">
                    <label for="emailphone">Enter sponsor id /Invite code</label>
                </div>
                @error('sponsorId')
            <span class="invalid-feedback" style="display:block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <p id="spname" style="font-weight: 700;font-size:smaller"></p>

                <div class="form-group form-floating @error('name') is-invalid @enderror">
                    <input id="name" type="text" class="form-control " name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full name">
                    <label for="emailphone">Full Name</label>
                </div>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="form-group mt-2 form-floating @error('email') is-invalid @enderror">
                    <input id="email" type="email" class="form-control " name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                    <label for="emailphone">Email</label>
                </div>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="form-group mt-2 form-floating @error('mobile') is-invalid @enderror">
                    <input id="mobile" type="text" onkeypress="return isNumberKey(event)" maxlength="10" minlength="10" class="form-control " name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" placeholder="Mobile">
                    <label for="emailphone">Mobile</label>
                </div>
                @error('mobile')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="form-floating mt-2 @error('password') is-invalid @enderror">
                    <input id="password" type="password" class="form-control " name="password" required autocomplete="new-password" placeholder="Password">
                    <label for="password">Password</label>
                </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="form-floating mt-2">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
                    <label for="confirmpassword">Confirm Password</label>
                    <button type="button" class="btn btn-link text-danger tooltip-btn" data-bs-toggle="tooltip" data-bs-placement="left" title="" id="passworderror" data-bs-original-title="Enter valid Password">
                    </button>

                </div>
                <button  type="submit" class="btn btn-lg btn-default mt-3">Signup now</button>
                <a href="{{route('login')}}" target="_self" class="text-white btn btn-lg btn-link">Already have account?</a>
            </form>
            </div>
        </div>
    </main>

 @include('auth.authFooter')

</body>


<!-- Mirrored from maxartkiller.com/website/mobileux2/HTML/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Aug 2023 15:27:01 GMT -->
</html>
