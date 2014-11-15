/**
 * Created by Administrator on 14-8-17.
 */

$( document ).ready(function() {

    var data = {
        calculatedTotal: 0,
        finalTotal: 0
    }

    init();

    function init(){
        data.calculatedTotal = parseNumber(calculateTotal());
        data.finalTotal = parseNumber($("#finalTotal").val());
        installToggle();
        showSavedPrice();
    }


    function showSavedPrice(){
        var calculatedTotal = parseNumber(calculateTotal());
        var finalTotal = parseNumber($("#finalTotal").val());
        var diff = calculatedTotal - finalTotal;
        if(diff > 0){
                $("#reducedPriceDisplay").show();
                $("#reducedPrice").html(diff.toFixed(2));
                $("#basicPrice").html(calculatedTotal.toFixed(2));
        } else {
            $("#reducedPriceDisplay").hide();
        }
    }


    /**
     *  Timber
     */
    $("#timberTotalCalculate").on('click', function() {
        var total = $("input#timberPrice").val()*$("input#timberArea").val();
        total *= (1+$("input#timberWastage").val()/100);
        total = total.toFixed(2);
        $("input#timberTotal").displayVal(total);
    });
    $("#timberTotalClear").on('click', function() {
        $("input#timberTotal").val('');
    });

    /**
     *  Underlay
     */
    $("#underlayTotalCalculate").on('click', function() {
        var total = $("input#underlayPrice").val()*$("input#underlayArea").val();
        total = total.toFixed(2);
        $("input#underlayTotal").displayVal(total);
    });
    $("#underlayTotalClear").on('click', function() {
        $("input#underlayTotal").val('');
    });

    /**
     *  Carpet Removal
     */
    $("#carpetRemovalTotalCalculate").on('click', function() {
        var total = $("input#carpetRemovalPrice").val()*$("input#carpetRemovalArea").val();
        total = total.toFixed(2);
        $("input#carpetRemovalTotal").displayVal(total);
    });
    $("#carpetRemovalTotalClear").on('click', function() {
        $("input#carpetRemovalTotal").val('');
    });

    /**
     *  Furniture Removal
     */
    $("#furnitureRemovalTotalCalculate").on('click', function() {
        var total = $("input#furnitureRemovalPrice").val()*$("input#furnitureRemovalQuantity").val();
        total = total.toFixed(2);
        $("input#furnitureRemovalTotal").displayVal(total);
    });
    $("#furnitureRemovalTotalClear").on('click', function() {
        $("input#furnitureRemovalTotal").val('');
    });

    /**
     *  Floor Leveling
     */
    $("#floorLevelingTotalCalculate").on('click', function() {
        var total = $("input#floorLevelingPrice").val()*$("input#floorLevelingArea").val();
        total = total.toFixed(2);
        $("input#floorLevelingTotal").displayVal(total);
    });
    $("#floorLevelingTotalClear").on('click', function() {
        $("input#floorLevelingTotal").val('');
    });


    /**
     *  Skirting
     */
    $("#skirtingTotalCalculate").on('click', function() {
        var total = $("input#skirtingPrice").val()*$("input#skirtingLength").val();
        total = total.toFixed(2);
        $("input#skirtingTotal").displayVal(total);
    });
    $("#skirtingTotalClear").on('click', function() {
        $("input#skirtingTotal").val('');
    });

    $('input:radio[name="installChoice"]').on("change", installToggle);
    function installToggle(){
        if($("input[name=installChoice]:checked").val() == "scotia") {
            $('.skirtingBox').hide();
        } else {
            $('.skirtingBox').show();
        }
    }
    /**
     *  Aluminum Trim
     */
    $("#atTotalCalculate").on('click', function() {
        var total = $("input#atPrice").val()*$("input#atLength").val();
        total = total.toFixed(2);
        $("input#atTotal").displayVal(total);
    });
    $("#atTotalClear").on('click', function() {
        $("input#atTotal").val('');
    });

    /**
     * Extra Item 1
     */
    $("#addMoreItems").on('click', function() {
        $("#item1, #item2, #item3").show();
        $("#addMoreItemsContainer").hide();
    })


    $("#item1TotalCalculate").on('click', function() {
        var total = $("input#item1Price").val()*$("input#item1Quantity").val();
        total = total.toFixed(2);
        $("input#item1Total").displayVal(total);
    });
    $("#item1TotalClear").on('click', function() {
        $("input#item1Total").val('');
    });
    /**
     * Extra Item 2
     */
    $("#item2TotalCalculate").on('click', function() {
        var total = $("input#item2Price").val()*$("input#item2Quantity").val();
        total = total.toFixed(2);
        $("input#item2Total").displayVal(total);
    });
    $("#item2TotalClear").on('click', function() {
        $("input#item2Total").val('');
    });
    /**
     * Extra Item 3
     */
    $("#item3TotalCalculate").on('click', function() {
        var total = $("input#item3Price").val()*$("input#item3Quantity").val();
        total = total.toFixed(2);
        $("input#item3Total").displayVal(total);
    });
    $("#item3TotalClear").on('click', function() {
        $("input#item3Total").val('');
    });

    /**
     * Summary box
     */
    $("#totalPriceCalculate").on('click', function() {
        var total = calculateTotal();
        data.calculatedTotal = total;
        setFinalTotal(total)
    });
    $("#totalPriceClear").on('click', function() {
        setFinalTotal('0.00');
    });
    $('#popupEditTotalPrice').on('show.bs.modal', function (e) {
        var total = calculateTotal();
        data.calculatedTotal = total;
        $(this).find("#popupOldTotalPriceNumber").html(total);
        editButtonDisabled();
    }).on('hidden.bs.modal', function (e) {
        $(this).find("input#popupFinalTotalPrice").val('');
        $(this).find("input#reduceFinalTotalPrice").val('');
        $(this).find("input#discountFinalTotalPrice").val('');
        $(this).find("#popupDiff").html('');
    });

    $("#popupEditButton").on('click',function(){
        $('#popupEditTotalPrice').modal('hide');
        var total = parseNumber($("input#popupFinalTotalPrice").val()).toFixed(2);
        setFinalTotal(total)

    })

    $('input#popupFinalTotalPrice').on('keyup', function(){
        popupDiffDisplay();
        editButtonDisabled();
    });

    function editButtonDisabled(){
        if($('input#popupFinalTotalPrice').val()==''){
            $('#popupEditButton').prop('disabled', true);
        } else{
            $('#popupEditButton').prop('disabled', false);
        }
    }

    function popupDiffDisplay (){
        var total = calculateTotal();
        var diff = parseNumber($('input#popupFinalTotalPrice').val()) - parseNumber(total);
        if(diff > 0){
            var diffText = " + $" + diff.toFixed(2);
        } else if (diff < 0) {
            var percentage = Math.round(Math.abs(diff)/total*100);
            var diffText = " - $" + Math.abs(diff).toFixed(2) + " (" + percentage +"% Off" + ")";
        } else {
            var diffText = "";
        }
        $("#popupDiff").displayHTML(diffText);
    }

    $("input#reduceFinalTotalPrice").on('keyup', function(e){
        var total = data.calculatedTotal - parseNumber(e.target.value);
        $("#discountFinalTotalPrice").val('');
        $("#popupFinalTotalPrice").displayVal(total);
        popupDiffDisplay();
        editButtonDisabled();
    })

    $("#discountFinalTotalPrice").on('keyup', function(e){
        var total = data.calculatedTotal*(1 - parseNumber(e.target.value)/100);
        total = Math.round(total * 100) / 100;
        $("#reduceFinalTotalPrice").val('');
        $("#popupFinalTotalPrice").displayVal(total);
        popupDiffDisplay();
        editButtonDisabled();
    })

    $("#refreshPaymentTerms").on('click',function(e){
        e.preventDefault();
        calculatePaymentTerms();
    })

    $("#viewQuoteBtn").on('click',function() {
        $( "#popupView" ).load( "viewQuote.php?quoteid="+$("input#quoteId").val(), function() {
            $("#popupView").popup("open");
        })
    });
    $("#confirmSaveQuote").on('click',function(e) {
        e.preventDefault();

        $('#popupConfirmSave').modal('hide');

        $("#saveQuoteBtn").prop("disabled",true);
        $("#saveQuoteBtn").html("Saving . . . ");

        data['calculatedTotal'] = calculateTotal();
        // get all the inputs into an array.
        var $inputs = $('#editQuoteForm :input');

        $inputs.each(function() {
            data[this.name] = $(this).val();
        });

        var installChoice = $('input[name=installChoice]:checked').val();
        var skirtingChoice = $('input[name=skirtingChoice]:checked').val();
        data['installChoice'] = installChoice;
        data['skirtingChoice'] = skirtingChoice;
        if(installChoice == 'scotia'){
            data['skirtingChoice'] = '';
            data['skirtingLength'] = '';
            data['skirtingPrice'] = '';
            data['skirtingTotal'] = '';
        }
        var request = $.ajax({
            url: "../page/quoteController.php?method=saveQuote",
            type: "POST",
            data: data,
            dataType: "json"
        });
        request.done(function( msg ) {
            $("#saveQuoteBtn").prop("disabled",false);
            $("#saveQuoteBtn").html("Save Quote");
            if(msg.status == 1){
                var options = {
                    "backdrop" : "static",
                    "keyboard" : false
                }
                $('#saveSuccessModal').modal(options);

            } else {
                $('#saveFailMsg').text('Error info: '+ msg.reason);
                var options = {
                    "backdrop" : "static",
                    "keyboard" : false
                }
                $('#saveFailModal').modal(options);
            }
        });
        request.fail(function( jqXHR, textStatus ) {
            $("#saveQuoteBtn").prop("disabled",false);
            $("#saveQuoteBtn").html("Save Quote");
            $('#saveFailMsg').text('Ajax request failed. Error info: '+ textStatus);
            var options = {
                "backdrop" : "static",
                "keyboard" : false
            }
            $('#saveFailModal').modal(options);
        });
    });
    $("#saveQuoteBtn").on('click',function(e) {
        e.preventDefault();

        $('#popupConfirmSave').modal({
            "backdrop" : "static"
        });
    });

    /** Generic Functions   */

    function setFinalTotal(total){
        data.finalTotal = total;
        calculatePaymentTerms();
        $("#finalTotal").displayVal(total);

        var reducedPrice = parseNumber(data.calculatedTotal) - parseNumber(total);
        if(reducedPrice > 0 && parseNumber(total)!=0){
            $("#reducedPriceDisplay").show();
            $("#reducedPrice").displayHTML(reducedPrice.toFixed(2));
            $("#basicPrice").displayHTML(parseNumber(data.calculatedTotal).toFixed(2));
        } else {
            $("#reducedPriceDisplay").hide();
        }

    }


    function calculatePaymentTerms(){

        var total = parseNumber(data.finalTotal);
        var term1 = (total*0.1).toFixed(2);
        var term2 = (total*0.7).toFixed(2);
        var term3 = (total*0.2).toFixed(2);
        $("#paymentTerm1").displayVal(term1);
        $("#paymentTerm2").displayVal(term2);
        $("#paymentTerm3").displayVal(term3);

    }


    function calculateTotal(){
        var timberTotal = parseNumber($("input#timberTotal").val());
        var underlayTotal = parseNumber($("input#underlayTotal").val());

        var carpetRemovalTotal = parseNumber($("input#carpetRemovalTotal").val());
        var furnitureRemovalTotal = parseNumber($("input#furnitureRemovalTotal").val());
        var floorLevelingTotal = parseNumber($("input#floorLevelingTotal").val());
        var skirtingTotal = parseNumber($("input#skirtingTotal").val());
        var deliveryFeeTotal = parseNumber($("input#deliveryFeeTotal").val());
        var atTotal = parseNumber($("input#atTotal").val());

        var item1Total = parseNumber($("input#item1Total").val());
        var item2Total = parseNumber($("input#item2Total").val());
        var item3Total = parseNumber($("input#item3Total").val());


        var total = 0;
        total += timberTotal + underlayTotal + carpetRemovalTotal + furnitureRemovalTotal + floorLevelingTotal + deliveryFeeTotal + atTotal;
        total += item1Total + item2Total + item3Total;
        if($("input[name=installChoice]:checked").val() == "skirting"){
            total += skirtingTotal;
        }
        total = total.toFixed(2);
        return total;
    }

    function parseNumber(val){
        if($.isNumeric( val )){
            return parseFloat(val);
        }
        return 0;
    }

    (function ( $ ) {
        $.fn.displayVal = function(val) {
            this.stop().val(val).hide(0).fadeIn("slow");
        };
        $.fn.displayHTML = function(val) {
            this.stop().html(val).hide(0).fadeIn("slow");
        };
    }( jQuery ));




});

