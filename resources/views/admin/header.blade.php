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
  <link rel="stylesheet" href="{{asset('textEditor/editor.css')}}">
  {{-- datatable css end --}}
  <style>
    .rotatePreviewImage{
    font-size: small;
    margin: 5px;
    background: #5b5be0;
    color: white;
    padding: 5px;
    border-radius: 6px;
}
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
    background: #04AA6D;
}
.navbar-light .navbar-nav .nav-link {
    color: rgb(255 255 255);
}
[class*=sidebar-dark-] {
    background: #04AA6D;
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

.bottom-navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  bottom: 0;
  width: 100%;
}

.bottom-navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 14px;
}

.bottom-navbar a:hover {
  background: #f1f1f1;
  color: black;
}

.bottom-navbar a.active {
  background-color: #04AA6D;
  color: white;
}

.my-options{
    margin: 5px;
    border-radius: 8px;
    box-shadow: 2px 1px 7px 1px #cacaca;
}
.my-options i{
  color:black;
  font-size:12px;
  margin-right:10px;
}

.my-options .righ-arrow{
  color:black;
  margin-right: 0;

}

  </style>

  <!-- Button trigger modal -->
<button type="button" id="newsModalBtn" class="btn btn-primary d-none" data-toggle="modal" data-target="#newsModal">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Important Information</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <?=Helper::getCompany()->news?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

