<footer class="main-footer">
    <strong>Copyright &copy; 2020.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.2
    </div>
</footer>

<!-- jQuery -->
<script src="{{ URL::asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ URL::asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
{{--<script src="{{ URL::asset('plugins/chart.js/Chart.min.js') }}"></script>--}}
<!-- Sparkline -->
<script src="{{ URL::asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ URL::asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ URL::asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
{{--<script src="{{ URL::asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>--}}
<!-- daterangepicker -->
<script src="{{ URL::asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ URL::asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ URL::asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ URL::asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::asset('dist/js/pages/dashboard.js') }}"></script>

{{--<script type="text/javascript">
    $("#brand").change(function () {
        var brandID = $(this).val();
        console.log('brandID : ' + brandID);
        if (brandID) {
            $.ajax({
                type: 'GET',
                url: '{{url('/adminPanel/getModel')}}?brand_id=' + brandID,
                success: function (data) {
                    console.log(data);
                    var dataRow;
                    for (j = 0; j < data.length; j++) {
                        var brand_id=data[j].id;

                        dataRow += "<tr>" +
                            "<td>" + (j + 1) + "</td>" +
                            // "<td>" + brand_id+ "</td>" +
                            "<td>" + data[j].name + "</td>" +
                            /*"<td>" + data[j].id + "</td>" +*/
                            "<td class='project-actions text-right'>" +
                            "<a class='btn btn-info btn-sm' href='{{ route("edit-model",brand_id) }}'> <i class='fas fa-pencil-alt'> </i> Edit </a>" +
                            "</td>" +
                            "<td>" +
                            "<form action='' method='post'><button type='submit' class='btn btn-danger btn-sm' ><i class='fas fa-trash'></i>Delete</button></form>" +
                            "</td>" +
                            "</tr>"
                    }
                    $('#brand_data').html(dataRow);
                }
            });
        } else {
        }
    });
</script>--}}


