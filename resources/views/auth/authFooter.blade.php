
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin_panel')}}/dist/js/adminlte.min.js"></script>


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
</script>
