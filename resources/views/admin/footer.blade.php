
<!-- jQuery -->
<script src="{{asset('admin_panel')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin_panel')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin_panel')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('admin_panel')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('admin_panel')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('admin_panel')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('admin_panel')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin_panel')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('admin_panel')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('admin_panel')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admin_panel')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('admin_panel')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin_panel')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin_panel')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('admin_panel')}}/dist/js/demo.js"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('admin_panel')}}/dist/js/pages/dashboard.js"></script>




{{-- datatable js start --}}
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
{{-- datatable js end --}}

<script>
    $(document).ready(function() {
    $('table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
    } );






} );


    //to show confirmation message
function confirmAction(msg,url)
    {
        if(confirm(msg))
        {
            document.location.href=url;
        }
    }
    function copyText(id,msg)
    {
        var content = $("#"+id).text();

                // Create a temporary textarea element to store the content
                var tempTextArea = $("<textarea>");
                tempTextArea.text(content);

                // Append the temporary textarea to the document body
                $("body").append(tempTextArea);

                // Select the text in the textarea
                tempTextArea.select();

                // Copy the selected text to the clipboard
                document.execCommand("copy");

                // Remove the temporary textarea from the document body
                tempTextArea.remove();

                // Display a message or perform any other actions after copying
                alert("Referal URL copied : " + content);
    }
</script>
