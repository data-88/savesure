<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="{{ asset('img/footers_logo.png') }}" alt="">
                            </a>
                        </div>
                        <p>
                            +977 01-333333 <br>
                            Bhaktapur, Nepal
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-3">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".4s">
                        <h3 class="footer_title">
                            Services
                        </h3>
                        <ul>
                            <li><a href="/twowheeler">Two-Wheeler </a></li>
                            <li><a href="/car">Private Vehicle </a></li>
                            <li><a href="#">Commercial Vehicle</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-3">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".5s">
                        <h3 class="footer_title">
                            Useful Links
                        </h3>
                        <ul>
                            <li><a href="/about">About</a></li>
                            <li><a href="#"> Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="copy-right_text col-xl-12">
                    <p class="copy_right text-center">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/ footer end  -->


<!-- jQuery library -->
<script src="{{ URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js') }}"></script>

<!-- Popper JS -->
<script src="{{ URL::asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}"></script>

<!-- Latest compiled JavaScript -->
<script src="{{ URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}"></script>

<script src="{{ URL::asset('https://code.jquery.com/ui/1.12.1/jquery-ui.js') }}"></script>

<script src="{{ URL::asset('js/comparision.js') }}"></script>

@yield('js_content')

{{--Javascript with ajax for dynamic dropdown brand-type--}}
<script type="text/javascript">
    $('#brand').change(function () {
        var brandID = $(this).val();
        console.log(brandID);
        if (brandID) {
            $.ajax({
                type: 'GET',
                url: '{{url('getTypes')}}?brand_id=' + brandID,
                success: function (res) {
                    console.log(res)
                    if (res) {
                        $('#type').empty();
                        $('#type').append('<option>Select Model</option>');
                        $.each(res, function (key, value) {
                            $('#type').append('<option value="' + key + '">' + value + '</option>');
                        });
                    } else {
                        $('#type').empty();
                    }
                }

            });
        } else {
            $('#type').empty();
            $('#variant').empty();
        }
    });

    {{--Javascript with ajax for dynamic dropdown type-variants--}}
    $('#type').on('change', function () {
        var typeID = $(this).val();
        if (typeID) {
            $.ajax({
                type: 'GET',
                url: '{{url('getVariants')}}?type_id=' + typeID,
                success: function (res) {
                    console.log(res);
                    if (res) {
                        $('#variant').empty();
                        $('#variant').append('<option>Select Variant</option>');
                        $.each(res, function (key, value) {
                            $('#variant').append('<option value="' + key + '">' + value + '</option>');
                        });
                    } else {
                        $('#variant').empty();
                    }
                }
            });
        } else {
            $('#variant').empty();
        }
    });
</script>



