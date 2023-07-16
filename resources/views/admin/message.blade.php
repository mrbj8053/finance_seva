@if(Session::has('errorMessage'))
<div class="alert alert-danger">
    <strong>Warning!</strong> {{Session::get('errorMessage')}}
  </div>
@elseif (Session::has('successMessage'))
<div class="alert alert-success">
    <strong>Success !</strong> {{Session::get('successMessage')}}
  </div>
@endif
