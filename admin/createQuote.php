<?php include("header.php");?>

<div class="pageheader">
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
<div class="contentpanel">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-btns">
                <a href="" class="panel-close">×</a>
                <a href="" class="minimize">−</a>
            </div>

            <div class="row">
                <div class="col-sm-3 text-muted">
                    Create New Quote
                </div>

            </div>
        </div>
        <div class="panel-body">
            <?php include("quoteForm.php");?>
            <div class="row">
                <div class="col-sm-12">
                    <button id="saveQuoteBtn" class="btn btn-success btn-lg" style="width: 190px;margin-right:20px;margin-left:20px;margin-top:20px;">Save Quote</button>
                    <a href="quotes.php"  class="btn btn-danger btn-lg cancelSaveQuoteBtn" style="width: 140px;margin-top:20px;">Cancel</a>
                </div>
            </div>
        </div><!-- panel-body -->
    </div><!-- panel -->

</div><!-- contentpanel -->

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
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Confirm Creating Quote</h4>
            </div>
            <div class="modal-body">
                <p style="padding-left: 10px;">
                    New quote will be created. Are you sure? Click 'Yes' to continue.
                </p>
                <button type="button" id="confirmSaveQuote"  class="btn btn-success" style="width:100px">Yes</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="float:right;width:100px">Cancel</button>

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="saveSuccessModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog" style="margin-top:130px;">
        <div class="modal-content">
            <div class="modal-body" style="text-align: center;">
                <h3>New Quote Created Successfully</h3>
                <a href="quotes.php"  class="btn btn-success" style="width: 140px;margin-top:20px;">OK</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="saveFailModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" style="text-align: center;">
                <h3>Quote Created Failed</h3>
                <p>Something wrong, please try later</p>
                <p id="saveFailMsg"></p>
                <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
            </div>
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
<script src="js/timberland/editQuote.js"></script>
<script>
    jQuery(document).ready(function() {

        "use strict";

        jQuery("#nav-makequotesPC").addClass("active");
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
        $("#datepicker").val($.datepicker.formatDate("yy-mm-dd", new Date()));

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
    })
</script>

</body>
</html>