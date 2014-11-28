/**
 * Created by Administrator on 14-8-17.
 */

$( document ).ready(function() {

    var data = {
        newContract: 0,
        quoteId: 0
    }

    /**
     * Summary box
     */
    init();

    function init(){
        if($("input#id").val()!=''){
            data['newContract'] = 1;
        }
        if($("input#quoteId").val()!=''){
            data['quoteId'] = $("input#quoteId").val();
            $("#ajaxViewRefQuote").load('viewQuoteFromDB.php?onlyShowData=1&quoteid=' + $("input#quoteId").val());
        } else{
            $("#viewRefQuoteBtn").hide();
        }

    }

    $('#viewRefQuoteBtn').on('click', function(e) {
        e.preventDefault();
        $("#ajaxViewRefQuote").slideToggle("slow");
        $(this).toggleClass('btn-success').toggleClass('btn-default');
    });


    $("#refreshPaymentTerms").on('click',function(e){
        e.preventDefault();
        calculatePaymentTerms();
    })

    $("#confirmSaveContract").on('click',function(e) {
        e.preventDefault();

        $('#popupConfirmSave').modal('hide');

        $("#saveContractBtn").prop("disabled",true);
        $("#saveContractBtn").html("Saving . . . ");

        data = generateContractData();

        var request = $.ajax({
            url: "../page/contractController.php?method=saveContract",
            type: "POST",
            data: data,
            dataType: "json"
        });
        request.done(function( msg ) {
            $("#saveContractBtn").prop("disabled",false);
            $("#saveContractBtn").html("Save Contract");
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
            $("#saveContractBtn").prop("disabled",false);
            $("#saveContractBtn").html("Save Contract");
            $('#saveFailMsg').text('Ajax request failed. Error info: '+ textStatus);
            var options = {
                "backdrop" : "static",
                "keyboard" : false
            }
            $('#saveFailModal').modal(options);
        });
    });
    $("#saveContractBtn").on('click',function(e) {
        e.preventDefault();

        $('#popupConfirmSave').modal({
            "backdrop" : "static"
        });
    });


    function calculatePaymentTerms(){

        var total = parseNumber($('#finalTotal').val());
        var term1 = (total*0.1).toFixed(2);
        var term2 = (total*0.7).toFixed(2);
        var term3 = (total*0.2).toFixed(2);
        $("#paymentTerm1").displayVal(term1);
        $("#paymentTerm2").displayVal(term2);
        $("#paymentTerm3").displayVal(term3);

    }


    function generateContractData(){
        var viewData= data;

        // get all the inputs into an array.
        var inputs = $('#editContractForm :input');

        inputs.each(function() {
            viewData[this.name] = $(this).val();
        });

        return viewData;

    }

    function parseNumber(val){
        if($.isNumeric( val )){
            return parseFloat(val);
        }
        return 0;
    }

    var temp1 = "Supply& Install\n\nSanding and Polishing  sqm=$\n\nCarpet Removal: N/A\t\t\tScotia: N/A\n\nDelivery fee: N/A\t\t\t\t\tAluminum Trim: N/A\n\nTOTAL PRICE: $";
    var temp2 = "Supply& Install\nApprox.  sqm pre-finished solid timber Blackbutt (120mm) @ $99/sqm = $\n__ stairs @ $150/step = $\n\nSkirting board: $ (@$6/m\nDelivery fee:$\nTrim: Silver \n\nTotal Price: $\nDiscounted price: $ \t(save $)\n\n* This price does not include flooring levelling.";
    var temp3 = "Supply& Install\nApprox.   sqm including 5%wastage Floating Blackbutt Timberland@$99/sqm=$ \n\nSilver Underlay included\n\nPlastic Water Proof@$4/sqm=$\n\nTake off Timber (   sqm) @$20/sqm=$\n\nCarpet Removal: N/A \t\t\tScotia: incl.\n\nDelivery fee:  $  \t\t\t\t\tAluminum Trim: Champagne $\n\nTotal Price:$\n\n* This price does not include flooring levelling.\n* Total price is subject to a site measure/inspection by Timberland Flooring to confirm dimensions.";
    var temp4 = "Supply& Install\nEstimated __ sqm bamboo coffee@$69/sqm=$___\n\nCarpet Removal: \t\t\tScotia:\n\nDelivery fee: \t\t\t\tAluminum Trim: Champagne $\n\nTotal Price: TBA\n\n* This price does not include flooring levelling.";


    $('#descriptionTemp1Btn').on('click', function(e) {
        e.preventDefault();
        $('#description').val(temp1);
    });
    $('#descriptionTemp2Btn').on('click', function(e) {
        e.preventDefault();
        $('#description').val(temp2);
    });
    $('#descriptionTemp3Btn').on('click', function(e) {
        e.preventDefault();
        $('#description').val(temp3);
    });
    $('#descriptionTemp4Btn').on('click', function(e) {
        e.preventDefault();
        $('#description').val(temp4);
    });

    (function ( $ ) {
        $.fn.displayVal = function(val) {
            this.stop().val(val).hide(0).fadeIn("slow");
        };
        $.fn.displayHTML = function(val) {
            this.stop().html(val).hide(0).fadeIn("slow");
        };
    }( jQuery ));




});

