<!-- footer start -->
<footer class="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-3">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="footer_logo">
                            <a href="#">
                                <img src="{{ asset('img/footers_logo.png') }}" alt="">
                            </a>
                        </div>
                        <p>
                            quotes@support.com <br>
                            +977 01-333333 <br>
                            Bhaktapur, Nepal
                        </p>
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-3">
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
                <div class="col-xl-2 col-md-6 col-lg-2">
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
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="footer_widget wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".6s">
                        <h3 class="footer_title">
                            Subscribe
                        </h3>
                        <form action="#" class="newsletter_form">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit">Subscribe</button>
                        </form>
                        <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems
                            luckily.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right_text wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".3s">
        <div class="container">
            <div class="footer_border"></div>
            <div class="row">
                <div class="col-xl-12">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<!-- JS -->
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/nice-select.min.js"></script>
<script src="js/jquery.slicknav.min.js"></script>

<script src="js/main.js"></script>

<script src="http://code.jquery.com/jquery-2.1.3.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


{{--Javascript with ajax for dynamic dropdown brand-type--}}
<script type="text/javascript">
    $('#brand').change(function () {
        var brandID = $(this).val();
        if (brandID) {
            $.ajax({
                type: 'GET',
                url: '{{url('getTypes')}}?brand_id=' + brandID,
                success: function (res) {
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

{{--Preview page idv slider and checkbox script--}}
<script>
    // $('#policy_type').text('Third Party');

    $(document).ready(function () {
        $('#thirdparty').prop('checked', true);
        $('#thirdparty').click(function () {
            $('#thirdparty').prop('checked', true);
            alert('Third Party Coverage is the minimum. Thus, this cannot be unchecked.');
        });

        //Checkbox check and uncheck

        /*$('#comprehensive').click(function () {
            //if checked.
            if ($(this).prop('checked')) {
                $('#policy_type').append(', Comprehensive');
            } else {
                $('#policy_type').text('Third Party');
            }
        });*/
    });
    $(document).ready(function(){
        $('#comprehensive').change(function(){
            if(this.checked)
                $('#slider').fadeIn('slow');
            else
                $('#slider').fadeOut('slow');

        });
    });
</script>
<script>
    $( function() {
        $( "#slider" ).slider({
            value:50000,
            min: 50000,
            max: 1000000,
            step: 1000,
            slide: function( event, ui ) {
                $( "#amount" ).val( "RS." + ui.value );
            }
        });
        $( "#amount" ).val( "RS." + $( "#slider" ).slider( "value" ) );
    } );
</script>



