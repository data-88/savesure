/*
===================== Preview page Old/New Vehicle Display ========================
*/

$(document).on('click', '#oldNew input', function () {
    var oldNew = $(this).val();
    if (oldNew == 0) {
        $('.oldYear').show();
    }
    if (oldNew == 1) {
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

    var thirdPartyAmount = parseInt($('#ccPrem').text());                                                        /*Getting premium amount as text and changing it into Integer.*/

    var comprehensiveChkBox = $("input[type='checkbox'][value='1']");                                            /*Automatically Check RSMT Chekbox when Comprehenive is checked.*/
    var rsmtChkBox = $("input[type='checkbox'][value='2']");
    comprehensiveChkBox.on('change', function(){
        rsmtChkBox.prop('checked',this.checked);
    });

    /*Defining Rates*/
    var rsmtDamageAllRate = 0.025 / 100;
    var rsmtVehicleDamageRate = 0.15 / 100;
    var driverCoverage = 500000;
    var passangerCoverage = 500000;

    var riotdamageall = (driverCoverage + passangerCoverage) * rsmtDamageAllRate;                                       /*Riot Damage to Passengers and Driver compensation price to add into premium.*/
    var riotVehicleDamage;
    var bikePremium;
    var price;


    var userValue = $('#ccPrem').text();

    function updateUserValue(val){
        userValue = val;
    }
    //Passing Value to another page through URL
    $(document).ready(function () {
        $('.company-redirect').on('click',function (e) {
            let item = $(e.target);
            let url = item.data('url');
            if (url === undefined){
                url = item.parent().data('url');
            }
            url = url.replace('%userValue%',userValue);
            window.location.href=url
        })
    });

    /*var ui_amount_data = $('#amount').text();

    function updateUiValue(uiVal){
        ui_amount_data = uiVal;
    }
    $(document).ready(function () {
        $('.company-redirect').on('click',function (e) {
            let item = $(e.target);
            let url = item.data('url');
            if (url === undefined){
                url = item.parent().data('url');
            }
            url = url.replace('%ui_amount_data%',ui_amount_data);
            window.location.href=url
        })
    });*/

    //Slider Initialization
    $(document).on('click', '.full_coverage', function () {
        $('.firstpartyform').toggle();
        var last = 0;
        $("#slider").slider({
            value: 50000,
            min: 50000,
            max: 500000,
            step: 1000,
            slide: function (event, ui) {
                $("#amount").val("रू" + ui.value);
                /*updateUiValue(ui.value);*/
                var bikePremium1 = ui.value * 1.5 / 100;
                var bikepremium2;                                                                                       /*Calculation the bike premium rate according to how old the bike is*/
                if (ageOfBike < 5)
                    bikepremium2 = 0;
                else if (ageOfBike <= 10 ){
                    bikepremium2 = 0.15 * bikePremium1;
                }
                else {
                    bikepremium2 = 0.25 * bikePremium1;
                }
                /*console.log('aob: '+ ageOfBike);*/
                bikePremium = bikePremium1 + bikepremium2;
                /*console.log("Premium: " + bikePremium);*/
                /*var excessOwnDamage = bikePremium * eodRate / 100;                                                    /!*Excess Own Damage Calculation.*!/
                console.log("eod: " + excessOwnDamage);
                var result1 = bikePremium - excessOwnDamage;
                console.log('result 1: ' + result1);*/

                var normalPremium = bikePremium >= 1000 ? bikePremium : 1000;                                           /*If bikePremium is less than 1000 then bikePremium value is 1000*/
                /*console.log('Normal: '+ normalPremium);*/
                riotVehicleDamage = ui.value * rsmtVehicleDamageRate;                                                   /*Calculating RiotVehicleDamage Price according to the current ui.Value selected which is also the Sum Insured.*/
                /*console.log("rvd: " + riotVehicleDamage);*/
                /*console.log("rda: " + riotdamageall);*/
                if (ui.value > last) {
                    if (ui.value >= 50000){
                        thirdPartyAmount = thirdPartyLiability + normalPremium + riotVehicleDamage + riotdamageall;
                        $("#ccPrem").text(thirdPartyAmount);
                        $(".ccPrem2").text(thirdPartyAmount);
                        updateUserValue(thirdPartyAmount);
                    }
                }
                if (ui.value < last){
                    if (ui.value >= 50000){
                        thirdPartyAmount = thirdPartyLiability + normalPremium + riotVehicleDamage + riotdamageall;
                        $("#ccPrem").text(thirdPartyAmount);
                        $(".ccPrem2").text(thirdPartyAmount);
                        updateUserValue(thirdPartyAmount);
                    }
                    if (ui.value <= 50000){
                        thirdPartyAmount = thirdPartyLiability + normalPremium + riotVehicleDamage + riotdamageall;
                        $("#ccPrem").text(thirdPartyAmount);
                        $(".ccPrem2").text(thirdPartyAmount);
                        updateUserValue(thirdPartyAmount);
                    }
                }
                last = ui.value;
            }
        });
        price = $("#amount").val("रू" + $("#slider").slider("value"));
        /*updateUiValue(price);*/

        if (document.getElementById('full_coverage').checked) {                                               /*Change Function if Comprehensive is Checked.*/
            document.getElementById("rsmt_div").style.marginTop = "100px";                                    /*Adding Style Margin to RSMT Division.*/
            document.getElementById("rsmt").disabled = true;                                                  /*Disabling the RSMT Checkbox when Comprehensive is checked.*/
            /*document.getElementById("eoDiv").style.visibility = "visible";*/                                          /*Displaying EOD Select Menue.*/
            riotVehicleDamage = 50000 * 0.0015;                                                                         /*RSMT value for Riot to calculate premium when Comprehensive is checked.*/
            $('.firstcheck').addClass('fa-check');                                                               /*Adding Check Mark Class.*/
            $('.firstcheck').removeClass('fa-times');                                                            /*Removing Cross Mark Class.*/
            thirdPartyAmount = thirdPartyLiability + 1000 + riotVehicleDamage + riotdamageall;                          /*Calculation for static premium on first click.*/
            $("#ccPrem").text(thirdPartyAmount);                                                                 /*Passing value as a text to div with ID ccPrem.*/
            $(".ccPrem2").text(thirdPartyAmount);
            updateUserValue(thirdPartyAmount);
        } else {
            document.getElementById("rsmt_div").style.marginTop = "0px";
            document.getElementById("rsmt").disabled = false;
            /*document.getElementById("eoDiv").style.visibility = "hidden";*/
            $('.firstcheck').removeClass('fa-check');
            $('.firstcheck').addClass('fa-times');
            $("#ccPrem").text(thirdPartyLiability);
            $(".ccPrem2").text(thirdPartyLiability);
            updateUserValue(thirdPartyAmount);
        }
    });
    /*
     =============================== RSMT For Third Party =================================
    */
    $(document).on('click', '.rsmt-coverage', function (){
        if (document.getElementById('rsmt').checked){
            var PaxPremium = 2 * 125;                                                                                   /*It is a RSMT charge for Third Party Coverage.*/
            var TotalThirdParty = thirdPartyLiability + PaxPremium;
            $("#ccPrem").text(TotalThirdParty);
            $(".ccPrem2").text(TotalThirdParty);
            updateUserValue(TotalThirdParty);
            console.log(TotalThirdParty);
        }
        else {
            $("#ccPrem").text(thirdPartyLiability);
            $(".ccPrem2").text(thirdPartyLiability);
        }
    });
});


