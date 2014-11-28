<?php 
if(isset($_GET['fromQuote'])){
    include_once("../page/quoteController.php");
    $quoteId = $_GET['quoteid'];
    $contractData = $quote->convertContract($quoteId);
}
include("header.php");

?>

<!--<div class="pageheader">
    <h2><i class="fa fa-edit"></i>Create Quote </h2>
    <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li><a href="index.php">Admin</a></li>
            <li class="active">Create Quote</li>
        </ol>
    </div>
</div>
<a href="quotes.php" class="btn btn-primary cancelSaveQuoteBtn" style="margin-left: 20px;margin-top: 18px;"><i class="fa fa-arrow-circle-left"></i> Back To Quotes Page</a>
-->
<div class="contentpanel">
    <div class="panel panel-default">
        <div class="panel-heading-logo panel-heading">
            <!--            <div class="panel-btns">
                            <a href="" class="panel-close">×</a>
                            <a href="" class="minimize">−</a>
                        </div>-->

            <div class="row">
                <img src="images/logo.png" style="float:right" width="180px"/>
                <div class="col-sm-5" style="line-height: 60px;font-size: 15pt;">
                    Create Contract
                </div>

            </div>
        </div>
        <?php include('contractForm.php'); ?>
    </div><!-- panel -->

</div><!-- contentpanel -->

<!--    Modals    -->



<div class="modal fade" id="popupConfirmSave" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog" style="width:800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Please confirm to save the contract</h4>
            </div>
            <div id="ajaxViewContract"></div>
            <div class="modal-body">
                <div style="padding:5px;">
                    <button type="button" id="confirmSaveContract"  class="btn btn-success" style="width:200px;font-size: 18px;">Create</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:right;width:200px;font-size: 18px;">Cancel</button>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="saveSuccessModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog" style="margin-top:130px;">
        <div class="modal-content">
            <div class="modal-body" style="text-align: center;">
                <h3>New Contract Created Successfully</h3>
                <a href="contracts.php"  class="btn btn-success" style="width: 140px;margin-top:20px;">OK</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="saveFailModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" style="text-align: center;">
                <h3>Contract Created Failed</h3>
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
            <div id="ajaxViewContract2"></div>
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

<script src="js/jquery.maskedinput.min.js"></script>
<script src="js/jquery.tagsinput.min.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/timberland/accounting.js"></script>
<script>
    jQuery(document).ready(function() {

        "use strict";

        jQuery("#nav-contract").addClass("active");
        // Tags Input
        jQuery('#tags').tagsInput({width:'auto'});

        // Select2
        jQuery(".select2").select2({
            width: '100%'
        });

        // Textarea Autogrow
        jQuery('#autoResizeTA').autogrow();

        // Date Picker
        jQuery('.datepicker').datepicker({dateFormat: "dd/mm/yy"});
        //$(".datepicker").val($.datepicker.formatDate("yy-mm-dd", new Date()));

        // Spinner
        var spinner = jQuery('#spinner').spinner();
        spinner.spinner('value', 0);

        $('input#contractor').val('Timberland Flooring');
        $('input#contractorAddress').val('Unit 2, 620-632 Botany Rd, Alexandria, NSW 2015');
        $('input#contractorPhone').val('02-8065 7710');

        <?php if(isset($_GET['fromQuote'])){ ?>
            var contractData = <?php echo json_encode($contractData); ?>;
            $('input#quoteId').val(contractData.quoteId);
            $('input#quoteNumber').val(contractData.quoteNumber);
            $('input#clientName').val(contractData.clientName);
            $('input#clientMobile').val(contractData.clientMobile);
            $('input#clientAddress').val(contractData.clientAddress);
            $('input#clientEmail').val(contractData.clientEmail);
            $('#description').val(contractData.description);
            $('input#finalTotal').val(accounting.toFixed(contractData.finalTotal, 2));
            $('input#paymentTerm1').val(accounting.toFixed(contractData.paymentTerm1, 2));
            $('input#paymentTerm2').val(accounting.toFixed(contractData.paymentTerm2, 2));
            $('input#paymentTerm3').val(accounting.toFixed(contractData.paymentTerm3, 2));
        <?php }?>
    })
</script>
<script src="js/timberland/contract.js"></script>
</body>
</html>