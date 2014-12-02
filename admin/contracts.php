<?php include("header.php") ; ?>
<div class="pageheader">
    <h2><i class="fa fa-file-text"></i> Contracts </h2>
    <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li><a href="index.php">Admin</a></li>
            <li class="active">Contracts</li>
        </ol>
    </div>
</div>

<div class="contentpanel">

    <div class="panel panel-default">
        <div class="panel-body">
            <a href="createContract.php" class="btn btn-orange" style="margin-bottom: 10px;"><i class="fa fa-plus" style="padding-top:0px;padding-right:15px"></i> Create Contract</a>
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="contractsTable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Contract Number</th>
                        <th>Quote Number</th>
                        <th>Create Date</th>
                        <th>Owner Name</th>
                        <th>Total Price</th>
                        <th class="operation">Operation</th>

                    </tr>
                    </thead>


                    <tbody>
                    <?php include("../page/contractController.php");
                    $resultArray = $contract->getAllContracts();
                    foreach($resultArray as $row){
                        $output = '<tr id="row-'.$row['id'] .'">'.
                            '<td>'.$row['id'].'</td>'.
                            '<td>'.$row['contractNumber'].'</td>'.
                            '<td>'.$row['quoteNumber'].'</td>'.
                            '<td>'.$row['createTime'].'</td>'.
                            '<td>'.$row['clientName'].'</td>'.
                            '<td>$'.number_format($row['finalTotal'], 2).'</td>'.
                            '<td class="operation">'.
                            '<div class="btn-group mr5" style="margin-right:0">
                                <a type="button"  class="btn btn-white btn-sm" href="editContract.php?id='.$row['id'].'" style="margin-right:0">Edit</a>
                                <button type="button" class="btn btn-white dropdown-toggle btn-sm" data-toggle="dropdown">
                                  Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="" data="'.$row['id'].'" class="delete-row"><i class="fa fa-trash-o" style="padding-right:10px"></i>Delete</a></li>
                                  <li><a target="_blank" href="contractPDF.php?contractid='.$row['id'].'"><i class="fa fa-file-pdf-o" style="padding-right:10px"></i>Open PDF in Browser</a></li>
                                  <li><a href="contractPDF.php?contractid='.$row['id'].'&download=1"><i class="fa fa-download" style="padding-right:10px"></i>Download PDF file</a></li>
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

        jQuery("#nav-contracts").addClass("active");

        jQuery('#contractsTable').dataTable({
            "order": [[ 0, "desc" ]],
            "iDisplayLength": 10,
            "sPaginationType": "full_numbers",
            "scrollX": true,
            "columnDefs": [
                { "width": "200px", "targets": 'operation' }
            ]

        });

        // Select2
        jQuery('select').select2({
            minimumResultsForSearch: -1
        });

        jQuery('select').removeClass('form-control');

        // Delete row in a table
        jQuery('.delete-row').click(function(){
            var tr = jQuery(this).closest('tr');
            var c = confirm("Are you sure you want to delete this Contract "+$(this).attr("data")+"?");
            if(c){
                var request = $.ajax({
                    url: "../page/contractController.php?method=inactiveContract",
                    type: "POST",
                    data: {"contractId":$(this).attr("data")},
                    dataType: "json",
                    complete: function(){
                        tr.fadeOut(function(){
                            jQuery(this).remove();
                        });
                    }
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