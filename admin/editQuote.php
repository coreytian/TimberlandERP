<?php
include_once("../page/quoteController.php");
include("header.php");
$quoteId = $_GET['quoteid'];
$quoteData = $quote->getQuote($quoteId);
?>
<div class="pageheader">
    <h2><i class="fa fa-edit"></i>Edit Quote </h2>
    <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li><a href="index.php">Admin</a></li>
            <li class="active">Edit Quote</li>
        </ol>
    </div>
</div>
<a href="quotes.php" class="btn btn-primary cancelSaveQuoteBtn" style="margin-left: 20px;margin-top: 18px;"><i class="fa fa-arrow-circle-left"></i> Back To Quotes Page</a>
<div class="contentpanel">
    <div class="panel panel-default">
        <div class="panel-heading">

            <div class="panel-btns">
                <a href="" class="panel-close">×</a>
                <a href="" class="minimize">−</a>
            </div>

            <div class="row">
                <div class="col-sm-3 text-muted">
                    <span>Quote ID: <?php echo $quoteData['quote_id']; ?></span>
                    <br/>
                    <span>Created at: <?php echo $quoteData['quote_createTime']; ?></span>
                    <br/><span>Updated at: <?php echo $quoteData['quote_updateTime']>$quoteData['quote_floating_updateTime']?$quoteData['quote_updateTime']:$quoteData['quote_floating_updateTime']; ?></span>

                </div>

            </div>
        </div>
        <?php include("quoteForm.php");?>
    </div><!-- panel -->

</div><!-- contentpanel -->

</div><!-- mainpanel -->

<!--    Modals    -->

<div class="modal fade" id="popupEditTotalPrice" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Edit Total Price</h4>
            </div>
            <div class="modal-body">
                <p style="padding-left: 10px;">
                    Calculated Total Price: <b>$<span id="popupOldTotalPriceNumber"></span></b>
                    <span id="popupDiff" style="color: #F60;margin-left:15px;font-weight: bold;"></span>
                </p>
                <div class="form-group">
                    <label class="col-sm-4 control-label" style="font-size: 15pt;padding-top: 10px;">Final Total Price</label>
                    <div class="col-sm-3 input-group">
                        <span class="input-group-addon">$</span>
                        <input id="popupFinalTotalPrice" name="popupFinalTotalPrice" type="text" class="input-lg form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Reduce</label>
                    <div class="col-sm-2 input-group input-group-sm">
                        <span class="input-group-addon">$</span>
                        <input id="reduceFinalTotalPrice" name="reduceFinalTotalPrice" type="text" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Discount</label>
                    <div class="col-sm-2 input-group input-group-sm">
                        <input id="discountFinalTotalPrice" name="reduceFinalTotalPrice" type="text" class="form-control" />
                        <span class="input-group-addon">% Off</span>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="popupEditButton" class="btn btn-primary">Change Price</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="popupConfirmSave" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Please confirm to save the quote</h4>
            </div>
            <div class="modal-body">
                <div id="ajaxViewQuote"></div>
                <div style="padding:5px;">

                    <button type="button" id="confirmSaveQuote"  class="btn btn-success" style="width:200px;font-size: 18px;">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:right;width:200px;font-size: 18px;">Cancel</button>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="saveSuccessModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" style="text-align: center;">
                <h3>Quote Saved Successfully</h3>
                <a href="quotes.php"  class="btn btn-success" style="width: 140px;margin-top:20px;">OK</a>
        </div>
        </div>
    </div>
</div>

<div class="modal fade" id="saveFailModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" style="text-align: center;">
                <h3>Quote Saved Failed</h3>
                <p>Something wrong, please try later</p>
                <p id="saveFailMsg"></p>
                <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="emptyModal" tabindex="-1" role="dialog" aria-labelledby="emptyModal" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div id="ajaxViewQuote2"></div>
        </div>
    </div>
</div>

</section>


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui-1.10.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/toggles.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/jquery.cookies.js"></script>


<script src="js/jquery.autogrow-textarea.js"></script>
<script src="js/bootstrap-timepicker.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/jquery.tagsinput.min.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/timberland/accounting.js"></script>

<script>
    jQuery(document).ready(function() {

        "use strict";

        jQuery("#nav-quotes").addClass("active");
        // Tags Input
        jQuery('#tags').tagsInput({width:'auto'});

        // Select2
        jQuery(".select2").select2({
            width: '100%'
        });

        // Textarea Autogrow
        jQuery('#autoResizeTA').autogrow();

        // Date Picker

        jQuery('#datepicker').datepicker();

        jQuery('#datepicker-inline').datepicker();

        jQuery('#datepicker-multiple').datepicker({
            numberOfMonths: 3,
            showButtonPanel: true
        });

        // Spinner
        var spinner = jQuery('#spinner').spinner();
        spinner.spinner('value', 0);

        // Input Masks
        jQuery("#date").mask("99/99/9999");
        jQuery("#phone").mask("(999) 999-9999");
        jQuery("#ssn").mask("999-99-9999");

        // Time Picker
        jQuery('#timepicker').timepicker({defaultTIme: false});
        jQuery('#timepicker2').timepicker({showMeridian: false});
        jQuery('#timepicker3').timepicker({minuteStep: 15});

        var quoteData =''
        quoteData = <?php echo json_encode($quoteData); ?>;

        $('input#quoteId').val(quoteData.quoteId);
        $('input#quoteNumber').val(quoteData.quoteNumber);
        $('input#datepicker').val(quoteData.quoteDate);
        $('input#consultant1').val(quoteData.consultant1);
        $('input#consultant2').val(quoteData.consultant2);
        $('input#clientName').val(quoteData.clientName);
        $('input#clientAddress').val(quoteData.clientAddress);
        $('input#clientPhone').val(quoteData.clientPhone);
        $('input#clientEmail').val(quoteData.clientEmail);
        if(quoteData.enableTimber == 1) {
            $('input#timberType').val(quoteData.timberType);
            $('input#timberSize').val(quoteData.timberSize);
            $('input#timberPrice').val(accounting.toFixed(quoteData.timberPrice, 2));
            $('input#timberArea').val(quoteData.timberArea);
            $('input#timberWastage').val(quoteData.timberWastage);
            $('input#timberTotal').val(accounting.toFixed(quoteData.timberTotal, 2));
            $('#enableTimber').addClass('enabled');
        }
        if(quoteData.enableUnderlay == 1) {
            $('input#underlayPrice').val(accounting.toFixed(quoteData.underlayPrice, 2));
            $('input#underlayArea').val(quoteData.underlayArea);
            $('input#underlayTotal').val(accounting.toFixed(quoteData.underlayTotal, 2));
            $('#enableUnderlay').addClass('enabled');
        }
        if(quoteData.enableCarpetRemoval == 1) {
            $('input#carpetRemovalPrice').val(accounting.toFixed(quoteData.carpetRemovalPrice, 2));
            $('input#carpetRemovalArea').val(quoteData.carpetRemovalArea);
            $('input#carpetRemovalTotal').val(accounting.toFixed(quoteData.carpetRemovalTotal, 2));
            $('#enableCarpetRemoval').addClass('enabled');
        }
        if(quoteData.enableFurnitureRemoval == 1) {
            $('input#furnitureRemovalPrice').val(accounting.toFixed(quoteData.furnitureRemovalPrice, 2));
            $('input#furnitureRemovalQuantity').val(quoteData.furnitureRemovalQuantity);
            $('input#furnitureRemovalTotal').val(accounting.toFixed(quoteData.furnitureRemovalTotal, 2));
            $('#enableFurnitureRemoval').addClass('enabled');
        }
        if(quoteData.enableFloorLeveling == 1) {
            $('input#floorLevelingPrice').val(accounting.toFixed(quoteData.floorLevelingPrice, 2));
            $('input#floorLevelingArea').val(quoteData.floorLevelingArea);
            $('input#floorLevelingTotal').val(accounting.toFixed(quoteData.floorLevelingTotal, 2));
            $('#enableFloorLeveling').addClass('enabled');
        }
        if(quoteData.enableInstall == 1) {
            if(quoteData.installChoice == "skirting"){
                $('input#scotia').prop('checked',false);
                $('input#skirting').prop('checked',true);
            } else{
                $('input#skirting').prop('checked',false);
                $('input#scotia').prop('checked',true);
            }

            if(quoteData.skirtingChoice == "skirtingChoice1"){
                $('input#skirtingChoice2').prop('checked',false);
                $('input#skirtingChoice1').prop('checked',true);
            } else{
                $('input#skirtingChoice1').prop('checked',false);
                $('input#skirtingChoice2').prop('checked',true);
            }

            $('input#skirtingPrice').val(accounting.toFixed(quoteData.skirtingPrice, 2));
            $('input#skirtingLength').val(quoteData.skirtingLength);
            $('input#skirtingTotal').val(accounting.toFixed(quoteData.skirtingTotal, 2));
            $('#enableInstall').addClass('enabled');
        }
        if(quoteData.enableDelivery == 1) {
            $('input#deliveryFeeTotal').val(quoteData.deliveryFeeTotal);
            $('#enableDelivery').addClass('enabled');
        }
        if(quoteData.enableAt == 1) {
            $('input#atColor').val(quoteData.atColor);
            $('input#atPrice').val(accounting.toFixed(quoteData.atPrice, 2));
            $('input#atLength').val(quoteData.atLength);
            $('input#atTotal').val(accounting.toFixed(quoteData.atTotal, 2));
            $('#enableAt').addClass('enabled');
        }
        if(quoteData.enableExtraItems == 1) {
            $('input#item1Name').val(quoteData.item1Name);
            $('input#item1Price').val(accounting.toFixed(quoteData.item1Price, 2));
            $('input#item1Quantity').val(quoteData.item1Quantity);
            $('input#item1Total').val(accounting.toFixed(quoteData.item1Total, 2));
            $('input#item2Name').val(quoteData.item2Name);
            $('input#item2Price').val(accounting.toFixed(quoteData.item2Price, 2));
            $('input#item2Quantity').val(quoteData.item2Quantity);
            $('input#item2Total').val(accounting.toFixed(quoteData.item2Total, 2));
            $('input#item3Name').val(quoteData.item3Name);
            $('input#item3Price').val(accounting.toFixed(quoteData.item3Price, 2));
            $('input#item3Quantity').val(quoteData.item3Quantity);
            $('input#item3Total').val(accounting.toFixed(quoteData.item3Total, 2));
            $('#enableExtraItems').addClass('enabled');
        }

        $('#finalTotal').text(accounting.toFixed(quoteData.finalTotal, 2));
        $('input#paymentTerm1').val(accounting.toFixed(quoteData.paymentTerm1, 2));
        $('input#paymentTerm2').val(accounting.toFixed(quoteData.paymentTerm2, 2));
        $('input#paymentTerm3').val(accounting.toFixed(quoteData.paymentTerm3, 2));
        $('#notes').val(quoteData.notes)


        var numberInputArray = [
            "paymentTerm1",
            "timberPrice",
            "timberTotal",
            "underlayPrice",
            "underlayTotal",
            "carpetRemovalPrice",
            "carpetRemovalTotal",
            "furnitureRemovalPrice",
            "furnitureRemovalTotal",
            "floorLevelingPrice",
            "floorLevelingTotal",
            "skirtingPrice",
            "skirtingTotal",
            "deliveryFeeTotal",
            "atPrice",
            "atTotal",
            "item1Price",
            "item1Total",
            "item2Price",
            "item2Total",
            "item3Price",
            "item3Total",
            "finalTotal",
            "paymentTerm1",
            "paymentTerm2",
            "paymentTerm3"
        ]

        for (var i=0,  tot=numberInputArray.length; i < tot; i++) {
            //$('input#'+numberInputArray[i]).number( true,2);
            //$('input#'+numberInputArray[i]).val(accounting.toFixed(number, 2));
        }






    })
</script>
<script src="js/timberland/editQuote.js"></script>
</body>
</html>