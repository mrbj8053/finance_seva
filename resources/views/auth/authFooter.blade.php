

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

<script>
    function checkSponsor(sponsor_id)
    {
        $('#spname').text('');

        if(sponsor_id.length==10)
        {
            $.ajax({
                url:"{{route('checkSponsor')}}",
                method:"POST",
                data:{own_id:sponsor_id,_token:'{{csrf_token()}}'},
                dataType:'json',
                success:function(res){
                    if(res.status==0)
                    alert(res.msg);
                    else
                    $('#spname').text(res.msg);
                }
            })
        }
    }
    function isNumberKey(evt) {
  var charCode = (evt.which) ? evt.which : evt.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))
    return false;
  return true;
}
</script>
