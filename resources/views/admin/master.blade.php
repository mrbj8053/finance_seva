<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.header')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('admin_panel')}}/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  @if(Auth::user()->role=='admin')
  <!-- Navbar -->
@include('admin.navbar')
  <!-- /.navbar -->


  <!-- Main Sidebar Container -->
 @include('admin.sidebar')
 @endif

  @yield('mainContent')
  @if(Auth::user()->role=='user')

  <section class="bottom-navbar">
    <a href="{{route('home')}}" style="width: 25%" class="active">
        <i class="fa-solid fa-house"></i><br>
         Home</a>
    <a href="{{route('products')}}" style="width: 25%"><i class="fa-brands fa-product-hunt"></i><br>Products</a>
    <a href="{{route('packageRequest.show',['type'=>4])}}" style="width: 25%"><i class="fa-solid fa-cart-shopping"></i><br>Purchased</a>
    <a href="{{route('profileSection')}}" style="width: 25%"><i class="fa-solid fa-user"></i><br>Profile</a>
  </section>
  @endif
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="{{env('APP_WEBSITE')}}">{{env("APP_NAME")}}</a>.</strong>
    All rights reserved.
    {{-- <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div> --}}
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@include('admin.footer')
</body>
</html>
