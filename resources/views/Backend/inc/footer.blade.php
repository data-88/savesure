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
<!-- Sparkline -->
<script src="{{ URL::asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ URL::asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ URL::asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
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

@yield('js_content')

<script type="text/javascript">
    $('#bikeBrand').change(function () {
        var brandID = $(this).val();
        console.log(brandID);
        if (brandID) {
            $.ajax({
                type: 'GET',
                url: '{{url('getModel')}}?brand_id=' + brandID,
                success: function (res) {
                    console.log(res)
                    if (res) {
                        $('#bikeModel').empty();
                        $('#bikeModel').append('<option>Select Model</option>');
                        $.each(res, function (key, value) {
                            $('#bikeModel').append('<option value="' + key + '">' + value + '</option>');
                        });
                    } else {
                        $('#bikeModel').empty();
                    }
                }

            });
        } else {
            $('#bikeModel').empty();
        }
    });
    $('#carBrand').change(function () {
        var brandID = $(this).val();
        console.log(brandID);
        if (brandID) {
            $.ajax({
                type: 'GET',
                url: '{{url('getModel')}}?brand_id=' + brandID,
                success: function (res) {
                    console.log(res)
                    if (res) {
                        $('#carModel').empty();
                        $('#carModel').append('<option>Select Model</option>');
                        $.each(res, function (key, value) {
                            $('#carModel').append('<option value="' + key + '">' + value + '</option>');
                        });
                    } else {
                        $('#carModel').empty();
                    }
                }

            });
        } else {
            $('#carModel').empty();
        }
    });
</script>
