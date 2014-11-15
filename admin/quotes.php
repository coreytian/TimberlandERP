<?php include("header.php") ; ?>
<div class="pageheader">
    <h2><i class="fa fa-file-text"></i> Quotes </h2>
    <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li><a href="index.php">Admin</a></li>
            <li class="active">Quotes</li>
        </ol>
    </div>
</div>

<div class="contentpanel">

    <div class="panel panel-default">
        <div class="panel-body">
            <a href="createQuote.php" class="btn btn-orange cancelSaveQuoteBtn" style="margin-top: 0px;"><i class="fa fa-pencil-square-o"></i> Create New Quote</a>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="quotesTable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Quote Number</th>
                        <th>Date</th>
                        <th>Quote Type</th>
                        <th>Client Name</th>
                        <th style="width:150px">Notes</th>
                        <th>Total Price</th>
                        <th class="operation">Operation</th>

                    </tr>
                    </thead>


                    <tbody>
                    <?php include("../page/quoteController.php");
                    $resultArray = $quote->getAllQuotes();
                    foreach($resultArray as $row){
                        $output = '<tr id="row-'.$row['quote_id'] .'">'.
                            '<td>'.$row['quote_id'].'</td>'.
                            '<td>'.$row['quoteNumber'].'</td>'.
                            '<td>'.$row['quoteDate'].'</td>'.
                            '<td>'.$row['quoteType'].'</td>'.
                            '<td>'.$row['clientName'].'</td>'.
                            '<td>'.$row['notes'].'</td>'.
                            '<td>$'.number_format($row['finalTotal'], 2).'</td>'.
                            '<td class="operation">'.
                                '<a  data-toggle="modal" data-target="#emptyModal" href="../page/viewQuote.php?quoteid='.$row['quote_id'].'"><i class="fa fa-eye"></i></a>'.
                                '<a href="editQuote.php?quoteid='.$row['quote_id'].'"><i class="fa fa-pencil"></i></a>'.
                                '<a href="" data="'.$row['quote_id'].'" class="delete-row"><i class="fa fa-trash-o"></i></a>'.
                            '<div class="btn-group mr5">
                                <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown">
                                  Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#">Make PDF(开发中)</a></li>
                                  <li><a href="#">Make Contract(开发中)</a></li>
                                </ul>
                             </div>'.
                            '</td>'.
                            '</tr>';
                        echo $output;
                    }
                    ?>
                    </tbody>
                </table>
            </div><!-- table-responsive -->

        </div><!-- panel-body -->
    </div><!-- panel -->

</div><!-- contentpanel -->

</div><!-- mainpanel -->
<div class="modal fade" id="emptyModal" tabindex="-1" role="dialog" aria-labelledby="emptyModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        </div>
    </div>
</div>


</section>


<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/toggles.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/jquery.cookies.js"></script>


<script src="js/jquery.datatables.min.js"></script>
<script src="js/select2.min.js"></script>

<script src="js/custom.js"></script>
<script>
    jQuery(document).ready(function() {

        "use strict";

        jQuery("#nav-quotes").addClass("active");

        jQuery('#quotesTable').dataTable({
           // "ajax": '../page/quoteController.php?method=getAllQuotes',
            "order": [[ 0, "desc" ]],
            "iDisplayLength": 10,
            "sPaginationType": "full_numbers",
            "scrollX": true,
            "columnDefs": [
                { "width": "170px", "targets": 'operation' }
            ]

        });

        // Select2
        jQuery('select').select2({
            minimumResultsForSearch: -1
        });

        jQuery('select').removeClass('form-control');

        // Delete row in a table
        jQuery('.delete-row').click(function(){

            var c = confirm("Continue delete?");
            if(c){
                jQuery(this).closest('tr').fadeOut(function(){
                    jQuery(this).remove();
                });
            }

            return false;
        });

        // Show aciton upon row hover
        jQuery('.table-hidaction tbody tr').hover(function(){
            jQuery(this).find('.table-action-hide a').animate({opacity: 1});
        },function(){
            jQuery(this).find('.table-action-hide a').animate({opacity: 0});
        });

        jQuery('body').on('hidden.bs.modal', '.modal', function () {
            $(this).removeData('bs.modal');
        });
    });
</script>

</body>
</html>