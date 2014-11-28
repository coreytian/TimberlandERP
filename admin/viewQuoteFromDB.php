<?php
include_once("../page/quoteController.php");
$quoteId = $_GET['quoteid'];

$quoteData = $quote->getQuote($quoteId);

function check_and_number_format($value){
    $value = trim($value);
    if(is_numeric($value)){
        return number_format($value, 2);
    }
    return '';
}
?>

<div class="viewContainer panel panel-default">
    <div style="padding:0 15px;" class="hide-only-show-data">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <img src="../include/img/timberlogo.jpg" class="img-responsive mb10" style="width:170px;margin:auto;margin-top:15px;" />
        <h3 style="font-size: 21px;font-weight: bold;text-align: center;color: #333;">Timberland Flooring Quotation</h3>
    </div>
    <?php include("viewQuote.php"); ?>
</div><!-- panel -->

<script>
    jQuery(document).ready(function() {

        "use strict";
        <?php if($_GET['onlyShowData']) {?>
            $('.hide-only-show-data').hide();
        <?php } ?>
    });


</script>