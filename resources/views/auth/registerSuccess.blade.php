<!DOCTYPE html>
<html lang="en">
<head>
 @include('auth.authHead')
 <style>
    body {
    background: #5542c6 !important;
    }
    td {
    border: 1px solid;
    padding: 5px;
}
table {
    width: 100%;
    margin-top: 36px;
    border-radius: 4px;
    border: 1px solid;
    box-shadow: 3px 3px 6px #cacaca;
}
 </style>
</head>
<body class="hold-transition login-page" >
<div class="login-box" >
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{route('login')}}" class="h1"><img src="{{asset('logo.png')}}" style="width:100px"></a>
    </div>
    <div class="card-body text-center">


        <div class="text-left">
        @if(!empty($user))
        <h5>Hello <strong>{{$user->name}}</strong>, welcome to {{env('APP_NAME')}} , your acount was successfully created,  use below details to login in your id .</h5>
        <table>
            <tr>
                <td>User ID </td>
                <td>{{$user->own_id}}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{$user->email}}</td>
            </tr>
            <tr>
                <td>Sponsor ID</td>
                <td>{{$user->sponsor_id}}</td>
            </tr>
        </table>
        @endif
    </div>


      <!-- /.social-auth-links -->

      <p class="mb-1">
        {{-- <a href="forgot-password.html">I forgot my password</a> --}}
      </p>
      <p class="mb-0">
        <a href="{{route('login','own_id='.$user->own_id)}}" class="text-center btn btn-primary">Login now</a>
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
