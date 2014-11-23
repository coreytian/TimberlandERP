<style>
    .viewContainerBody .basic {
        padding: 15px;
        float:left;
    }
    .viewContainerBody .clientInfo {
        padding: 15px;
        float:left;
    }
    .viewContainerBody .field{
        display: inline;
        float:left;
        width: 100%;
        padding: 2px 0;
    }
    .viewContainerBody .basic .fieldName{
        float: left;
        font-weight: bold;
        width: 50%;
        font-size: 14px;
    }

    .viewContainerBody .basic .fieldValue{
        display: inline;
        width:50%;
        float:left;
    }
    .viewContainerBody .clientInfo .fieldName{
        float: left;
        font-weight: bold;
        width: 30%;
        font-size: 14px;
    }
    .viewContainerBody .clientInfo .fieldValue{
        display: inline;
        width:70%;
        float:left;
    }

    .table-total-number{
        border:none !important;
    }
    .viewQuote-table-total td{
        padding-top:5px !important;
        padding-bottom:5px !important;
    }
</style>
<div class="panel-body viewContainerBody">
    <div class="row">
        <div class="col-sm-5">
            <div class="basic">
                <div class="field"><div class="fieldName">Quote Number: </div><div class="fieldValue"><?php echo $quoteData['quoteNumber'] ?></div></div>
                <div class="field"><div class="fieldName">Quote Date: </div><div class="fieldValue"><?php echo $quoteData['quoteDate'] ?></div></div>
                <div class="field"><div class="fieldName">Consultant: </div><div class="fieldValue"><?php echo $quoteData['consultant1']; if(!empty($quoteData['consultant2'])){echo ', '.$quoteData['consultant2'];} ?></div></div>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="clientInfo">
                <div class="field"><div class="fieldName">Client Name: </div><div class="fieldValue"><?php echo $quoteData['clientName'] ?></div></div>
                <div class="field"><div class="fieldName">Address: </div><div class="fieldValue"><?php echo $quoteData['clientAddress'] ?></div></div>
                <div class="field"><div class="fieldName">Phone Number: </div><div class="fieldValue"><?php echo $quoteData['clientPhone'] ?></div></div>
                <div class="field"><div class="fieldName">Email: </div><div class="fieldValue"><?php echo $quoteData['clientEmail'] ?></div></div>
            </div>
        </div><!-- col-sm-6 -->
       <!-- <img src="../include/img/timberlogo.jpg" class="img-responsive mb10" style="width:200px;margin-top:15px;" />
-->
    </div><!-- row -->

    <div class="table-responsive">
        <table class="table table-invoice">
            <thead>
            <tr>
                <th>Item</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
            </tr>
            </thead>
            <tbody>
            <?php if($quoteData['enableTimber']==1) {?>
                <tr>
                    <td>
                        <div>
                            <span style="float:left;width:50%">Timber Type: <?php echo $quoteData['timberType'] ?></span>
                            <span style="float:left;width:25%">Size: <?php echo $quoteData['timberSize'] ?></span>
                            <span style="float:left;width:25%">Wastage: <?php echo $quoteData['timberWastage'] ?>%</span>

                        </div>
                    </td>
                    <td>$<?php echo check_and_number_format($quoteData['timberPrice']) ?></td>
                    <td><?php echo $quoteData['timberArea'] ?> m<sup style="font-size: 8px;">2</sup></td>
                    <td>$<?php echo check_and_number_format($quoteData['timberTotal']) ?></td>
                </tr>
            <?php }?>
            <?php if($quoteData['enableUnderlay']==1) {?>
                <tr>
                    <td>
                        <div>Underlay</div>
                    </td>
                    <td>$<?php echo check_and_number_format($quoteData['underlayPrice']) ?></td>
                    <td><?php echo $quoteData['underlayArea'] ?> m<sup style="font-size: 8px;">2</sup></td>
                    <td>$<?php echo check_and_number_format($quoteData['underlayTotal']) ?></td>
                </tr>
            <?php }?>
            <?php if($quoteData['enableCarpetRemoval']==1) {?>
                <tr>
                    <td>
                        <div>Carpet Removal</div>
                    </td>
                    <td>$<?php echo check_and_number_format($quoteData['carpetRemovalPrice']) ?></td>
                    <td><?php echo $quoteData['carpetRemovalArea'] ?> m<sup style="font-size: 8px;">2</sup></td>
                    <td>$<?php echo check_and_number_format($quoteData['carpetRemovalTotal']) ?></td>
                </tr>
            <?php }?>
            <?php if($quoteData['enableFurnitureRemoval']==1) {?>
                <tr>
                    <td>
                        <div>Furniture Removal</div>
                    </td>
                    <td>$<?php echo check_and_number_format($quoteData['furnitureRemovalPrice']) ?></td>
                    <td><?php echo $quoteData['furnitureRemovalQuantity'] ?></td>
                    <td>$<?php echo check_and_number_format($quoteData['furnitureRemovalTotal']) ?></td>
                </tr>
            <?php }?>
            <?php if($quoteData['enableFloorLeveling']==1) {?>
                <tr>
                    <td>
                        <div>Floor Leveling</div>
                    </td>
                    <td>$<?php echo check_and_number_format($quoteData['floorLevelingPrice']) ?></td>
                    <td><?php echo $quoteData['floorLevelingArea'] ?> m<sup style="font-size: 8px;">2</sup></td>
                    <td>$<?php echo check_and_number_format($quoteData['floorLevelingTotal']) ?></td>
                </tr>
            <?php }?>
            <?php if($quoteData['enableInstall']==1) {?>
                <?php if($quoteData['installChoice']=='skirting') {?>
                    <tr>
                        <td>
                            <div><span style="float:left;width:50%">Skirting</span><span style="float:left"><?php echo $quoteData['skirtingChoice']=='skirtingChoice2'?"Supply & Install":"Install" ?></span></div>
                        </td>
                        <td>$<?php echo check_and_number_format($quoteData['skirtingPrice']) ?></td>
                        <td><?php echo $quoteData['skirtingLength'] ?> m</td>
                        <td>$<?php echo check_and_number_format($quoteData['skirtingTotal']) ?></td>
                    </tr>
                <?php } else {?>
                    <tr>
                        <td>
                            <div>Scotia</div>
                        </td>
                        <td></td>
                        <td></td>
                        <td>$0</td>
                    </tr>

                <?php }?>
            <?php }?>
            <?php if($quoteData['enableDelivery']==1) {?>
                <tr>
                    <td>
                        <div>Delivery Fee</div>
                    </td>
                    <td></td>
                    <td></td>
                    <td>$<?php echo check_and_number_format($quoteData['deliveryFeeTotal']) ?></td>
                </tr>
            <?php }?>
            <?php if($quoteData['enableAt']==1) {?>
                <tr>
                    <td>
                        <div><span style="float:left;width:50%">Aluminum Trim</span><span style="float:left">Color: <?php echo $quoteData['atColor'] ?></span></div>
                    </td>
                    <td>$<?php echo check_and_number_format($quoteData['atPrice']) ?></td>
                    <td><?php echo $quoteData['atLength'] ?> m</td>
                    <td>$<?php echo check_and_number_format($quoteData['atTotal']) ?></td>
                </tr>
            <?php }?>
            <?php if($quoteData['enableExtraItems']==1) {?>
                <?php
                for($i=1;$i<=3;$i++){
                    if(!empty($quoteData['item'.$i.'Total']) && $quoteData['item'.$i.'Total']!=0) {?>
                        <tr>
                            <td>
                                <div>Extra Item: <?php echo $quoteData['item'.$i.'Name'];?></div>
                            </td>
                            <td>$<?php echo check_and_number_format($quoteData['item'.$i.'Price']);?></td>
                            <td><?php echo $quoteData['item'.$i.'Quantity'];?></td>
                            <td>$<?php echo check_and_number_format($quoteData['item'.$i.'Total']);?></td>
                        </tr>
                    <?php }
                }?>

            <?php }?>
            </tbody>
        </table>
    </div><!-- table-responsive -->
    <div class="col-sm-6">
        <h5><strong>Notes</strong></h5>
        <div><?php echo $quoteData['notes'] ?></div>
    </div>
    <table class="table table-total viewQuote-table-total" style="width:45%">
        <tbody>
        <tr>
            <td><strong>Sub Total :</strong></td>
            <td class="table-total-number">$<?php echo check_and_number_format($quoteData['calculatedTotal']) ?></td>
        </tr>
            <?php $diff =  $quoteData['finalTotal'] - $quoteData['calculatedTotal'];
                  if($diff > 0){
                      echo '<tr><td><strong>Add :</strong></td>
                            <td class="table-total-number">+'.check_and_number_format($diff).'</td></tr>';
                  } elseif($diff < 0){
                      echo '<tr><td><strong>Discount :</strong></td>
                            <td class="table-total-number">'.check_and_number_format($diff).'</td></tr>';
                  }
            ?>
        <tr style="font-size:17px;font-weight:bold;background-color:#eee;">
            <td><strong>TOTAL :</strong></td>
            <td class="table-total-number">$<?php echo check_and_number_format($quoteData['finalTotal']) ?></td>
        </tr>
        <tr>
            <td><strong>Deposit with order 10% :</strong></td>
            <td class="table-total-number">$<?php echo check_and_number_format($quoteData['paymentTerm1']) ?></td>
        </tr>
        <tr>
            <td><strong>On Delivery of material 70% :</strong></td>
            <td class="table-total-number">$<?php echo check_and_number_format($quoteData['paymentTerm2']) ?></td>
        </tr>
        <tr>
            <td><strong>Balance on completion 20% :</strong></td>
            <td class="table-total-number">$<?php echo check_and_number_format($quoteData['paymentTerm3']) ?></td>
        </tr>
        </tbody>
    </table>



</div><!-- panel-body -->
