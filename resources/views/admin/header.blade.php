<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{env('APP_NAME')}}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin_panel')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{asset('admin_panel')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('admin_panel')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('admin_panel')}}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin_panel')}}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('admin_panel')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('admin_panel')}}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('admin_panel')}}/plugins/summernote/summernote-bs4.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

{{-- datatable css start --}}
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
  {{-- datatable css end --}}
  <style>
    .blink_me {
  animation: blinker 2s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}
    .navbar-white {
    color: #ffffff;
    /* background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(18,18,218,1) 0%, rgba(0,212,255,1) 100%); */
    background: linear-gradient(267deg, rgba(233,104,40,1) 2%, rgba(110,184,232,1) 20%, rgba(58,110,175,1) 46%);
}
.navbar-light .navbar-nav .nav-link {
    color: rgb(255 255 255);
}
[class*=sidebar-dark-] {
    background: linear-gradient(1deg, rgba(233,104,40,1) 2%, rgba(110,184,232,1) 20%, rgba(58,110,175,1) 46%);
}
[class*=sidebar-dark-] .sidebar a {
    color: #ffffff;
}
.brand-link .brand-image {
    float: left;
    line-height: .8;
    margin-left: .8rem;
    margin-right: .5rem;
    margin-top: -3px;
    max-height: 36px;
    background: white;
    width: auto;
    padding: 3px;
}

.customCardCorner{
    border: 1px solid #cacaca;
    padding: 10px;
    border-radius: 8px;
    box-shadow: 1px 2px 7px #cacaca;
}
.card-body{
    width: 100%;
    overflow-x: auto
}
  </style>
