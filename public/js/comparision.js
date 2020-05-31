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
    var finalprem;
    var comprehensiveChkBox = $("input[type='checkbox'][value='1']");                                            /*Automatically Check RSMT Chekbox when Comprehenive is checked.*/
    var rsmtChkBox = $("input[type='checkbox'][value='2']");
    comprehensiveChkBox.on('change', function(){
        rsmtChkBox.prop('checked',this.checked);
    });

    var riotdamageall = (driverCoverage + passangerCoverage) * rsmtDamageAllRate;                                       /*Riot Damage to Passengers and Driver compensation price to add into premium.*/
    var riotVehicleDamage;
    var bikePremium;

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
                var bikePremium1 = ui.value * 1.5 / 100;                                                                /*Comprehensive Price Rate Formula according to the sum insured*/
                var bikepremium2;                                                                                       /*Calculation the bike premium rate according to how old the bike is*/
                if (ageOfBike < 5)
                    bikepremium2 = 0;
                else if (ageOfBike <= 10 ){
                    bikepremium2 = 0.15 * bikePremium1;
                }
                else {
                    bikepremium2 = 0.25 * bikePremium1;
                }
                console.log('aob: '+ ageOfBike);
                bikePremium = bikePremium1 + bikepremium2;
                console.log("Premium: " + bikePremium);
                /*var excessOwnDamage = bikePremium * eodRate / 100;                                                    /!*Excess Own Damage Calculation.*!/
                console.log("eod: " + excessOwnDamage);
                var result1 = bikePremium - excessOwnDamage;
                console.log('result 1: ' + result1);*/

                var normalPremium = bikePremium >= 1000 ? bikePremium : 1000;                                           /*If bikePremium is less than 1000 then bikePremium value is 1000*/
                console.log('Normal: '+ normalPremium);
                riotVehicleDamage = ui.value * rsmtVehicleDamageRate;                                                   /*Calculating RiotVehicleDamage Price according to the current ui.Value selected which is also the Sum Insured.*/
                console.log("rvd: " + riotVehicleDamage);
                console.log("rda: " + riotdamageall);
                if (ui.value > last) {
                    if (ui.value >= 50000){
                        thirdPartyAmount = thirdPartyLiability + normalPremium + riotVehicleDamage + riotdamageall;
                        $("#ccPrem").text(thirdPartyAmount);
                        $(".ccPrem2").text(thirdPartyAmount);
                        finalprem = thirdPartyAmount;
                    }
                }
                if (ui.value < last){
                    if (ui.value >= 50000){
                        thirdPartyAmount = thirdPartyLiability + normalPremium + riotVehicleDamage + riotdamageall;
                        $("#ccPrem").text(thirdPartyAmount);
                        $(".ccPrem2").text(thirdPartyAmount);
                        finalprem = thirdPartyAmount;
                    }
                    if (ui.value <= 50000){
                        thirdPartyAmount = thirdPartyLiability + normalPremium + riotVehicleDamage + riotdamageall;
                        $("#ccPrem").text(thirdPartyAmount);
                        $(".ccPrem2").text(thirdPartyAmount);
                        finalprem = thirdPartyAmount;
                    }
                }
                last = ui.value;
            }
        });

        $("#amount").val("$" + $("#slider").slider("value"));

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
        } else {
            document.getElementById("rsmt_div").style.marginTop = "0px";
            document.getElementById("rsmt").disabled = false;
            /*document.getElementById("eoDiv").style.visibility = "hidden";*/
            $('.firstcheck').removeClass('fa-check');
            $('.firstcheck').addClass('fa-times');
            $("#ccPrem").text(thirdPartyLiability);
            $("#ccPrem2").text(thirdPartyLiability);

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
            console.log(TotalThirdParty);
        }
        else {
            $("#ccPrem").text(thirdPartyLiability);
        }
    });
});


