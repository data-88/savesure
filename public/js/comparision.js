/*
===================== Preview page idv slider and checkbox script ========================
*/

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
================== Checkbox Alert, Slider toggle and Icon Class Change ===================
*/
$(document).ready(function () {
    $(document).on('click', '.basic-coverage', function () {
        alert('Third Party Coverage is the minimum. Thus, this cannot be unchecked.');
    });

    var thirdPartyAmount = parseInt($('#ccPrem').text());
    var netThirdPayment = 0;

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
                var incData = ui.value * 1.5 / 100;                                                                     /*Comprehenive Price Rate Formula*/
                var normalPremium = incData >= 1000 ? incData : 1000;                                                   /*If incData is less than 1000 then incData value is 1000*/
                if (ui.value > last) {
                    if (ui.value >= 67000){
                        thirdPartyAmount = thirdPartyLiability + incData;
                        $("#ccPrem").text(thirdPartyAmount);
                    }
                }
                if (ui.value < last){
                    if (ui.value >= 67000){
                        thirdPartyAmount = thirdPartyLiability + incData;
                        $("#ccPrem").text(thirdPartyAmount);
                    }
                    if (ui.value <= 67000){
                        thirdPartyAmount = thirdPartyLiability + normalPremium;
                        $("#ccPrem").text(thirdPartyAmount);
                    }
                }
                last = ui.value;
            }
        });
        $("#amount").val("$" + $("#slider").slider("value"));

        if (document.getElementById('full_coverage').checked) {
            $('.firstcheck').addClass('fa-check');
            $('.firstcheck').removeClass('fa-times');
            thirdPartyAmount = thirdPartyLiability + 1000;
            $("#ccPrem").text(thirdPartyAmount);
        } else {
            $('.firstcheck').removeClass('fa-check');
            $('.firstcheck').addClass('fa-times');
            $("#ccPrem").text(thirdPartyLiability);

        }
    });
});


/*
 =============================== For Comparision Details =================================
 */


