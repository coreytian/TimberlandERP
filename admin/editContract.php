<?php
include_once("../page/contractController.php");
include("header.php");
$contractId = $_GET['id'];
$contractData = $contract->getContract($contractId);
?>
<div class="pageheader">
    <h2><i class="fa fa-edit"></i>Edit Contract </h2>
    <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li><a href="index.php">Admin</a></li>
            <li class="active">Edit Contract</li>
        </ol>
    </div>
</div>
<a href="contracts.php" class="btn btn-primary" style="margin-left: 20px;margin-top: 18px;"><i class="fa fa-arrow-circle-left"></i> Back To Contracts Page</a>
<div class="contentpanel">
    <div class="panel panel-default">
        <div class="panel-heading">

            <div class="panel-btns">
                <a href="" class="panel-close">×</a>
                <a href="" class="minimize">−</a>
            </div>

            <div class="row">
                <div class="col-sm-3 text-muted">
                    <span>Contract ID: <?php echo $contractData['id']; ?></span>
                    <br/>
                    <span>Created at: <?php echo $contractData['createTime']; ?></span>
                    <br/><span>Updated at: <?php echo $contractData['updateTime']; ?></span>

                </div>

            </div>
        </div>
        <?php include("contractForm.php");?>
    </div><!-- panel -->

</div><!-- contentpanel -->

</div><!-- mainpanel -->

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
                    <button type="button" id="confirmSaveContract"  class="btn btn-success" style="width:200px;font-size: 18px;">Save</button>
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
                <h3>Contract Saved Successfully</h3>
                <a href="contracts.php"  class="btn btn-success" style="width: 140px;margin-top:20px;">OK</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="saveFailModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" style="text-align: center;">
                <h3>Contract Saved Failed</h3>
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

        jQuery("#nav-contracts").addClass("active");
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

        var contractData =''
        contractData = <?php echo json_encode($contractData); ?>;
        $('input#id').val(contractData.id);
        $('input#quoteId').val(contractData.quoteId);
        $('input#quoteNumber').val(contractData.quoteNumber);
        $('input#contractNumber').val(contractData.contractNumber);
        $('input#contractor').val(contractData.contractor);
        $('input#contractorAddress').val(contractData.contractorAddress);
        $('input#contractorPhone').val(contractData.contractorPhone);
        $('input#clientName').val(contractData.clientName);
        $('input#clientMobile').val(contractData.clientMobile);
        $('input#clientPhone').val(contractData.clientPhone);
        $('input#clientAddress').val(contractData.clientAddress);
        $('input#clientEmail').val(contractData.clientEmail);
        $('#description').val(contractData.description);
        $('input#finalTotal').val(accounting.toFixed(contractData.finalTotal, 2));
        $('input#paymentTerm1').val(accounting.toFixed(contractData.paymentTerm1, 2));
        $('input#paymentTerm2').val(accounting.toFixed(contractData.paymentTerm2, 2));
        $('input#paymentTerm3').val(accounting.toFixed(contractData.paymentTerm3, 2));
        $('input#startDate').val(contractData.startDate);
        $('input#endDate').val(contractData.endDate);
        $('input#sign1').val(contractData.sign1);
        if(contractData.sign1Date){
            $('input#sign1Date').val($.datepicker.formatDate("dd/mm/yy", new Date(contractData.sign1Date)));
        }
        $('input#sign2').val(contractData.sign2);
        if(contractData.sign2Date){
            $('input#sign2Date').val($.datepicker.formatDate("dd/mm/yy", new Date(contractData.sign2Date)));
        }
    })
</script>
<script src="js/timberland/contract.js"></script>
</body>
</html>