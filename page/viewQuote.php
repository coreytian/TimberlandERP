<?php
include_once("quoteController.php");
$quoteId = $_GET['quoteid'];

$quoteData = $quote->getQuote($quoteId);
?>
<html>
<head>
    <meta charset="utf-8">
    <style>
        .viewContainer h2{
            text-align: center;
            margin: 25px 0 40px 0;
        }
        .viewContainer h4{
            color: #F60;
            margin-bottom: 8px;
        }
        .viewContainer .fieldName{
            float: left;
            font-weight: bold;
            width: 250px;
        }
        .viewContainer .field{
            display: inline-block;
            width: 100%;
        }
        .viewContainer .fieldValue{
            display: inline;
            width:200px;
        }
        .viewContainer{
            margin:auto;
            margin-top: 20px;
            width:600px;
        }

        .viewContainer .viewContainer, .description, .basic, .bottom{
            border: 1px solid;
            padding: 10px 15px 10px 15px;
            margin-bottom: 15px;
        }
        .viewContainer .basic{
            padding-top: 15px;
        }
        .viewContainer .extraItem{
            min-width: 350px;
            float: left;
        }

    </style>

</head>
<body>
<div class="viewContainer">
    <img src="../include/img/timberlogo.jpg" style="width: 30%;margin-left: 200px;">
    <h2>Timberland Flooring Quotation</h2>

    <div>
        <span>Quote Info</span>
        <div class="basic">
            <div class="field"><div class="fieldName">Quote Number: </div><div class="fieldValue"><?php echo $quoteData['quoteNumber'] ?></div></div>
            <div class="field"><div class="fieldName">Quote Date: </div><div class="fieldValue"><?php echo $quoteData['quoteDate'] ?></div></div>
            <div class="field"><div class="fieldName">Consultant: </div><div class="fieldValue"><?php echo $quoteData['consultant1']; if(!empty($quoteData['consultant2'])){echo ', '.$quoteData['consultant2'];} ?></div></div>
            <h4>Client Details</h4>
            <div class="field"><div class="fieldName">Client Name: </div><div class="fieldValue"><?php echo $quoteData['clientName'] ?></div></div>
            <div class="field"><div class="fieldName">Address: </div><div class="fieldValue"><?php echo $quoteData['clientAddress'] ?></div></div>
            <div class="field"><div class="fieldName">Phone Number: </div><div class="fieldValue"><?php echo $quoteData['clientPhone'] ?></div></div>
            <div class="field"><div class="fieldName">Email: </div><div class="fieldValue"><?php echo $quoteData['clientEmail'] ?></div></div>
        </div>
        <span>Description of Work</span>
        <div class="description">
            <h4>Supply & Install</h4>
            <div class="field"><div class="fieldName">Timber Type: </div><div class="fieldValue"><?php echo $quoteData['timberType'] ?></div></div>
            <div class="field"><div class="fieldName">Timber Size: </div><div class="fieldValue"><?php echo $quoteData['timberSize'] ?></div></div>
            <div class="field"><div class="fieldName">Price: </div><div class="fieldValue"><?php echo "$".number_format($quoteData['timberPrice'], 2) ?></div></div>
            <div class="field"><div class="fieldName">Area: </div><div class="fieldValue"><?php echo $quoteData['timberArea'] ?> m<sup style="font-size: 8px;">2</sup></div></div>
            <div class="field"><div class="fieldName">Wastage: </div><div class="fieldValue"><?php echo $quoteData['timberWastage'] ?>%</div></div>
            <div class="field"><div class="fieldName">Total: </div><div class="fieldValue">$<?php echo number_format($quoteData['timberTotal'], 2) ?></div></div>

            <h4>Underlay</h4>
            <div class="field"><div class="fieldName">Price: </div><div class="fieldValue">$<?php echo number_format($quoteData['underlayPrice'], 2) ?></div></div>
            <div class="field"><div class="fieldName">Area: </div><div class="fieldValue"><?php echo $quoteData['underlayArea'] ?> m<sup style="font-size: 8px;">2</sup></div></div>
            <div class="field"><div class="fieldName">Total: </div><div class="fieldValue">$<?php echo number_format($quoteData['underlayTotal'], 2) ?></div></div>

            <h4>Carpet Removal</h4>
            <div class="field"><div class="fieldName">Price: </div><div class="fieldValue">$<?php echo number_format($quoteData['carpetRemovalPrice'], 2) ?></div></div>
            <div class="field"><div class="fieldName">Area: </div><div class="fieldValue"><?php echo $quoteData['carpetRemovalArea'] ?> m<sup style="font-size: 8px;">2</sup></div></div>
            <div class="field"><div class="fieldName">Total: </div><div class="fieldValue">$<?php echo number_format($quoteData['carpetRemovalTotal'], 2) ?></div></div>

            <h4>Furniture Removal</h4>
            <div class="field"><div class="fieldName">Price: </div><div class="fieldValue">$<?php echo number_format($quoteData['furnitureRemovalPrice'], 2) ?></div></div>
            <div class="field"><div class="fieldName">Quantity: </div><div class="fieldValue"><?php echo $quoteData['furnitureRemovalQuantity'] ?></div></div>
            <div class="field"><div class="fieldName">Total: </div><div class="fieldValue">$<?php echo number_format($quoteData['furnitureRemovalTotal'], 2) ?></div></div>

            <h4>Floor Leveling</h4>
            <div class="field"><div class="fieldName">Price: </div><div class="fieldValue">$<?php echo number_format($quoteData['floorLevelingPrice'], 2) ?></div></div>
            <div class="field"><div class="fieldName">Area: </div><div class="fieldValue"><?php echo $quoteData['floorLevelingArea'] ?> m<sup style="font-size: 8px;">2</sup></div></div>
            <div class="field"><div class="fieldName">Total: </div><div class="fieldValue">$<?php echo number_format($quoteData['floorLevelingTotal'], 2) ?></div></div>


            <h4>Scotia/Skirting board</h4>
            <div class="field"><div class="fieldName"></div><div class="fieldValue"><?php echo $quoteData['installChoice'] ?></div></div>

            <?php if($quoteData['installChoice'] == "skirting"){ ?>

            <div class="field"><div class="fieldName"></div><div class="fieldValue"><?php echo $quoteData['skirtingChoice']=='skirtingChoice2'?"Supply & Install":"Install" ?></div></div>
            <div class="field"><div class="fieldName">Price: </div><div class="fieldValue">$<?php echo number_format($quoteData['skirtingPrice'], 2) ?></div></div>
            <div class="field"><div class="fieldName">Length: </div><div class="fieldValue"><?php echo $quoteData['skirtingLength'] ?> m</div></div>
            <?php } ?>
            <div class="field"><div class="fieldName">Total: </div><div class="fieldValue">$<?php echo number_format($quoteData['skirtingTotal'], 2) ?></div></div>

            <h4>Delivery Fee</h4>
            <div class="field"><div class="fieldName"></div><div class="fieldValue">$<?php echo number_format($quoteData['deliveryFeeTotal'], 2) ?></div></div>

            <h4>Aluminum Trim: Champagne</h4>
            <div class="field"><div class="fieldName">Color: </div><div class="fieldValue"><?php echo $quoteData['atColor'] ?></div></div>
            <div class="field"><div class="fieldName">Price: </div><div class="fieldValue">$<?php echo number_format($quoteData['atPrice'], 2) ?></div></div>
            <div class="field"><div class="fieldName">Length: </div><div class="fieldValue"><?php echo $quoteData['atLength'] ?> m</div></div>
            <div class="field"><div class="fieldName">Total: </div><div class="fieldValue">$<?php echo number_format($quoteData['atTotal'], 2) ?></div></div>
            <?php
            if(!(empty($quoteData['extraItem1Total'])&&empty($quoteData['extraItem2Total'])&&empty($quoteData['extraItem3Total']))){
                echo '<h4>Extra Items</h4>';
                $index = 1;
                if(!empty($quoteData['extraItem1Total'])){
                    echo '<div class="field"><div class="extraItem">'.$index.'. '.$quoteData['extraItem1Name'];
                    echo '&nbsp;$'.number_format($quoteData['extraItem1Price'], 2).'&nbsp;&#215;&nbsp;'.$quoteData['extraItem1Quantity'];
                    echo '</div><b>Total:</b> $'.number_format($quoteData['extraItem1Total'], 2);
                    echo '</div>';
                    $index++;
                }
                if(!empty($quoteData['extraItem2Total'])){
                    echo '<div class="field"><div class="extraItem">'.$index.'. '.$quoteData['extraItem2Name'];
                    echo '&nbsp;$'.number_format($quoteData['extraItem2Price'], 2).'&nbsp;&#215;&nbsp;'.$quoteData['extraItem2Quantity'];
                    echo '</div><b>Total:</b> $'.number_format($quoteData['extraItem2Total'], 2);
                    echo '</div>';
                    $index++;
                }
                if(!empty($quoteData['extraItem3Total'])){
                    echo '<div class="field"><div class="extraItem">'.$index.'. '.$quoteData['extraItem3Name'];
                    echo '&nbsp;$'.number_format($quoteData['extraItem3Price'], 2).'&nbsp;&#215;&nbsp;'.$quoteData['extraItem3Quantity'];
                    echo '</div><b>Total:</b> $'.number_format($quoteData['extraItem3Total'], 2);
                    echo '</div>';
                }
            }
            ?>
            <h4>Notes</h4>
            <div class="field"><?php echo $quoteData['notes'] ?></div>
        </div>
        <div class="bottom">
            <div class="field"><div class="fieldName" style="font-size:18pt">TOTAL PRICE:</div><div class="fieldValue" style="font-size:18pt">$<?php echo number_format($quoteData['finalTotal'], 2) ?> </div></div>
            <?php if ($quoteData['finalTotal']<$quoteData['calculatedTotal']){
                $saved = number_format($quoteData['calculatedTotal'] - $quoteData['finalTotal']);
                echo '<div class="field" style="font-size:15pt">Saved: $'.$saved.'</div>';
            }?>
            <br/><br/>


            <div class="field"><div class="fieldName">Deposit with order 10%</div><div class="fieldValue">$<?php echo number_format($quoteData['paymentTerm1'], 2) ?></div></div>
            <div class="field"><div class="fieldName">On Delivery of material 70% </div><div class="fieldValue">$<?php echo number_format($quoteData['paymentTerm2'], 2) ?></div></div>
            <div class="field"><div class="fieldName">Balance on completion 20%</div><div class="fieldValue">$<?php echo number_format($quoteData['paymentTerm3'], 2) ?></div></div>
        </div>



    </div>


</div>




</body>

</html>
