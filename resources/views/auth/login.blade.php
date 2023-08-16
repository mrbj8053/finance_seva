<!DOCTYPE html>
<html lang="en">
<head>
 @include('auth.authHead')
</head>
<body class="hold-transition login-page" >
<div class="login-box" >
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
        <img src="{{asset('logo.png')}}" style="width:200px" alt="">
        <br>
      <a href="{{route('login')}}" class="h1"><b>{{env('APP_NAME')}}</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>
        @include('admin.message')
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="input-group mb-3">
          <input  id="text" type="text" class="form-control @error('own_id') is-invalid @enderror" name="own_id" value="{{ isset($_GET['own_id'])?$_GET['own_id']:old('own_id') }}" required autocomplete="ownid" autofocus placeholder="Enter your user ID">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('own_id')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>
        <div class="input-group mb-3">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <!-- /.social-auth-links -->

      <p class="mb-1">
        {{-- <a href="forgot-password.html">I forgot my password</a> --}}
      </p>
      <p class="mb-0">
        <a href="{{route('register')}}" class="text-center">Don't have account ? Register now</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

@include('auth.authFooter')
</body>
</html>
