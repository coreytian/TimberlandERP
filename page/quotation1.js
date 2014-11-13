/**
 * Created by Administrator on 14-8-17.
 */

$( document ).ready(function() {

    var data = {
        calculatedTotal: 0,
        finalTotal: 0
    }

    $( "#quotationForm button" ).on( "click", function(event) {
        event.preventDefault();
    });

    /**
     *  Header
     */
    $("#consultant1Select").on('change', function() {
        if($("#consultant1Select option:selected").val() !== ''){
            $("input#consultant1").val($("#consultant1Select option:selected").text());
        }
    });
    $("#consultant2Select").on('change', function() {
        if($("#consultant2Select option:selected").val() !== ''){
            $("input#consultant2").val($("#consultant2Select option:selected").text());
        }
    });
    $("#clearClientBtn").on('click', function() {
        $("input#clientName").val('');
        $("input#clientAddress").val('');
        $("input#clientPhone").val('');
        $("input#clientEmail").val('');
    });








    /**
     *  Timber
     */
    $("#timberTypeSelect").on('change', function() {
        if($("#timberTypeSelect option:selected").val() !== ''){
            $("input#timberType").val($("#timberTypeSelect option:selected").text());
            $("input#timberPrice").displayVal($("#timberTypeSelect option:selected").val());
        }
    });
    $("#timberSizeSelect").on('change', function() {
        if($("#timberSizeSelect option:selected").val() !== ''){
            $("input#timberSize").val($("#timberSizeSelect option:selected").text());
        }
    });
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
    installToggle()
    $('input:radio[name="installChoice"]').on("change", installToggle);
    function installToggle(){
        if($("input[name=installChoice]:checked").val() == "scotia") {
            $('#skirtingBox').hide();
        } else {
            $('#skirtingBox').show();
        }
    }
    /**
     *  Aluminum Trim
     */
    $("#atColorSelect").on('change', function() {
        if($("#atColorSelect option:selected").val() !== ''){
            $("input#atColor").val($("#atColorSelect option:selected").text());
        }
    });
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
    $( "#popupEditTotalPrice" ).bind({
        popupbeforeposition: function(event, ui) {
            var total = calculateTotal();
            data.calculatedTotal = total;
            $(this).find("#popupOldTotalPriceNumber").html(total);
        }
    });
    $( "#popupEditTotalPrice" ).bind({
        popupafterclose: function(event, ui) {
            $(this).find("input#popupFinalTotalPrice").val('');
            $(this).find("#popupDiff").html('');
        }
    })
    $("#popupEditButton").on('click',function(){
        $( "#popupEditTotalPrice" ).popup( "close" );
        var total = parseNumber($("input#popupFinalTotalPrice").val()).toFixed(2);
        setFinalTotal(total)

    })
    $("#popupCancelButton").on('click',function(){
        $( "#popupEditTotalPrice" ).popup( "close" );
    })

    $('input#popupFinalTotalPrice').keyup(function(e){
        var total = calculateTotal();
        var diff = parseNumber(e.target.value) - parseNumber(total);
        if(diff > 0){
           var diffText = " + $" + diff.toFixed(2);
        } else if (diff < 0) {
            var percentage = Math.round(Math.abs(diff)/total*100);
           var diffText = " - $" + Math.abs(diff).toFixed(2) + " (" + percentage +"% Off" + ")";
        } else {
            var diffText = "";
        }
        $("#popupDiff").displayHTML(diffText);
    })

    $("#refreshPaymentTerms").on('click',function(){
        calculatePaymentTerms();
    })

    $("#viewQuoteBtn").on('click',function() {
        $( "#popupView" ).load( "viewQuote.php?quoteid="+$("input#quoteId").val(), function() {
            $("#popupView").popup("open");
        })
    });
    $("#saveQuoteBtn").on('click',function() {
        $.mobile.loading( "show", {
            text: "Saving...",
            textVisible: true,
            theme: "b",
            html: ""
        });

        data['calculatedTotal'] = calculateTotal();
        // get all the inputs into an array.
        var $inputs = $('#quotationForm :input');

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
            url: "quoteController.php?method=saveQuote",
            type: "POST",
            data: data,
            dataType: "json"
        });
        request.done(function( msg ) {
            $.mobile.loading( "hide");
            if(msg.status == 1){
                if(msg.hasOwnProperty('quoteId')){
                    $("input#quoteId").val(msg.quoteId);
                }
                $("#popupSaved").popup("open");
                //$( "#saveResult" ).html( "Saved" + msg.quoteId).show().fadeOut(3000);
            } else {
                alert( "Save Failed: " + msg.reason );
            }
        });
        request.fail(function( jqXHR, textStatus ) {
            $.mobile.loading( "hide");
            alert( "Save Failed: " + textStatus );
        });
    });

    /** Generic Functions   */

    function setFinalTotal(total){
        data.finalTotal = total;
        calculatePaymentTerms();
        $("#totalPriceNumber").displayHTML(total);

        $reducedPrice = parseNumber(data.calculatedTotal) - parseNumber(total);
        if($reducedPrice > 0 && parseNumber(total)!=0){
            $("#basicPriceDisplay").show();
            $("#reducedPriceDisplay").show();
            $("#basicPrice").displayHTML(data.calculatedTotal);
            $("#reducedPrice").displayHTML($reducedPrice.toFixed(2));
        } else {
            $("#basicPriceDisplay, #reducedPriceDisplay").hide();
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
