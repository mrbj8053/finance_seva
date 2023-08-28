<!DOCTYPE html>
<html lang="en">
<head>
  @include('auth.authHead')
</head>
<body class="hold-transition register-page" >
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
        <img src="{{asset('logo.png')}}" style="width:150px" alt="">
        <br>
      <a href="{{route('login')}}" class="h3"><b>{{env('APP_NAME')}}</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="input-group mb-3">
            <input id="sponsorId" type="text" onkeyup="checkSponsor(this.value)" maxlength="10" minlength="10" class="form-control @error('sponsarId') is-invalid @enderror" name="sponsorId" value="{{ isset($_GET['sponsor'])?$_GET['sponsor']:old('sponsorId') }}" required autocomplete="name" autofocus placeholder="Enter Sponsor ID">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>

            @error('sponsorId')
            <span class="invalid-feedback" style="display:block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div>
          <p id="spname" style="font-weight: 700;font-size:smaller"></p>
          {{-- <div class="input-group mb-3">
           <select name="position" id="position" class="form-control">
            <option value="Right" selected>Right</option>
            <option value="Left">Left</option>
           </select>
            @error('position')
            <span class="invalid-feedback" style="display:block" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div> --}}
        <div class="input-group mb-3">
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>
        <div class="input-group mb-3">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
        </div>
        <div class="input-group mb-3">
            <input id="mobile" type="text" onkeypress="return isNumberKey(event)" maxlength="10" minlength="10" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" placeholder="Mobile">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            @error('mobile')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
          </div>
        <div class="input-group mb-3">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
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
        <div class="input-group mb-3">
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" required id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>



      <a href="{{route('login')}}" class="text-center">Already have an account ? Login Here</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
@include('auth.authFooter')
<script>
    function isNumberKey(evt) {
  var charCode = (evt.which) ? evt.which : evt.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;
  return true;
}
</script>
</body>
</html>
