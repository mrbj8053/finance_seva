<!doctype html>
<html lang="en" class="h-100">


<!-- Mirrored from maxartkiller.com/website/mobileux2/HTML/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Aug 2023 15:27:01 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>{{env('APP_NAME')}}| Forgot password</title>

    <!-- manifest meta -->

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/favicon180.png" sizes="180x180">
    <link rel="icon" href="{{asset('logo.png')}}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{asset('logo.png')}}" sizes="16x16" type="image/png">

    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&amp;display=swap" rel="stylesheet">

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- style css for this template -->
    <link href="{{asset('frontend')}}/assets/css/style.css" rel="stylesheet" id="style">
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

    <!-- Begin page content -->
    <!-- Begin page content -->
    <main class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto mt-auto pt-4 text-center mb-100px d-grid gap-2">
                <h3 class="mb-1">Sorry to be here!</h3>
                <p class="text-muted mb-4">Please provide your<br>registered email address</p>
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form  method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-floating">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label for="emails">Enter Email Address</label>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                <button class="btn btn-lg btn-default btn-block mt-3">Procceed</a>
            </form>
            </div>
        </div>
    </main>


    <!-- Required jquery and libraries -->
    <script src="{{asset('frontend')}}/assets/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('frontend')}}/assets/js/popper.min.js"></script>
    <script src="{{asset('frontend')}}/assets/vendor/bootstrap-5/js/bootstrap.bundle.min.js"></script>

    <!-- cookie js -->
    <script src="{{asset('frontend')}}/assets/js/jquery.cookie.js"></script>

    <!-- Customized jquery file  -->
    <script src="{{asset('frontend')}}/assets/js/main.js"></script>
    <script src="{{asset('frontend')}}/assets/js/color-scheme.js"></script>

    <!-- PWA app service registration and works -->
    <script src="{{asset('frontend')}}/assets/js/pwa-services.js"></script>

    <!-- page level custom script -->
    <script src="{{asset('frontend')}}/assets/js/app.js"></script>

</body>


<!-- Mirrored from maxartkiller.com/website/mobileux2/HTML/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Aug 2023 15:27:01 GMT -->
</html>
