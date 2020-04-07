/*
===================== Preview page idv slider and checkbox script ========================
*/
/*var eodBearAmount;
$(document).on('click','.oldOrNew',function () {
    var oldOrNew = $(this).val();
    if (oldOrNew == 0){
        $('.oldOrNew').show();
    }
    if (oldOrNew == 1){
        $('.oldOrNew').hide();
        $(#yearsBeforePurchase).val();
    }
});*/

var eodBearAmount;
$(document).on('click', '#oldNew input', function () {
    var oldYear = $(this).val();
    if (oldYear == 0) {
        $('.oldYear').show();
    }
    if (oldYear == 1) {
        $('.oldYear').hide();
        $('#yearsBeforePurchase').val();
    }
});


/*
================== Checkbox Alert, Slider togger and Icon Class Change ===================
*/
$(document).ready(function () {
    $(document).on('click', '.basic-coverage', function () {
        alert('Third Party Coverage is the minimum. Thus, this cannot be unchecked.');
    });

    var thirdPartyAmount = parseInt($('#ccPrem').text());
    var netThirdPayment = 0;
    // alert(thirdPartyAmount);

    $(document).on('click', '.full_coverage', function () {
        $('.firstpartyform').toggle();
        var last = 0;
        $("#slider").slider({
            value: 50000,
            min: 50000,
            max: 500000,
            step: 1000,
            slide: function (event, ui) {
                $("#amount").val("$" + ui.value);
                var incData = ui.value * 1.5 / 100;
                var normalPremium = incData >= 1000 ? incData : 1000;
                console.log(normalPremium);
                if (ui.value > last) {
                    if (ui.value == 67000) {
                        netThirdPayment = 5;
                        thirdPartyAmount = thirdPartyAmount + netThirdPayment;
                        $("#ccPrem").text(thirdPartyAmount);
                    } else if (ui.value > 67000) {
                        netThirdPayment = 15;
                        thirdPartyAmount = thirdPartyAmount + netThirdPayment;
                        $("#ccPrem").text(thirdPartyAmount);
                    } else {
                        netThirdPayment;
                    }
                }
                if (ui.value < last){
                    if (ui.value == 67000) {
                        netThirdPayment = 20;
                        thirdPartyAmount = thirdPartyAmount - netThirdPayment;
                        $("#ccPrem").text(thirdPartyAmount);
                    } else if (ui.value > 67000) {
                        netThirdPayment = 15;
                        thirdPartyAmount = thirdPartyAmount - netThirdPayment;
                        $("#ccPrem").text(thirdPartyAmount);
                    } else {
                        netThirdPayment;
                    }
                }
                last = ui.value;
            }
        });
        $("#amount").val("$" + $("#slider").slider("value"));

        if (document.getElementById('full_coverage').checked) {
            $('.firstcheck').addClass('fa-check');
            $('.firstcheck').removeClass('fa-times');
             netThirdPayment = 1000;
             thirdPartyAmount = thirdPartyLiability + netThirdPayment;
             $("#ccPrem").text(thirdPartyAmount);

        } else {
            $('.firstcheck').removeClass('fa-check');
            $('.firstcheck').addClass('fa-times');
            /*netThirdPayment = 1000;
            thirdPartyAmount = thirdPartyAmount - netThirdPayment;
            $("#ccPremium").text(thirdPartyAmount);*/
            $("#ccPrem").text(thirdPartyLiability);

        }
    });
});


/*
 =============================== For Comparision Details =================================
 */


