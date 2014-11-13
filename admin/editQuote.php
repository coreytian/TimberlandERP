<?php include("header.php");

include_once("../page/quoteController.php");
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
        <div class="panel-body">
            <form id="editQuoteForm" class="form-horizontal form-bordered">
                <input id="quoteId" name="quoteId" type="hidden" value="<?php echo $quoteData['quote_id']; ?>"/>
                <input id="quoteType" name="quoteType" type="hidden" value="floating"/>
                <div class="form-group">

                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Quote Number</label>
                                <input type="text" name="quoteNumber" class="form-control" value="<?php echo $quoteData['quoteNumber']; ?>"/>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Quote Date</label>
                                <div class="input-group">
                                    <input  id="datepicker" type="text" name="quoteDate" class="form-control" value="<?php echo $quoteData['quoteDate']; ?>" />
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Consultant1</label>
                                <input value="<?php echo $quoteData['consultant1']; ?>" type="text" name="consultant1" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Consultant2</label>
                                <input value="<?php echo $quoteData['consultant2']; ?>" type="text" name="consultant2" class="form-control" />
                            </div>
                        </div>
                    </div><!-- row -->
                </div>
                <div class="form-group">
                    <span><strong>CLIENT DETAILS</strong></span>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Client Name</label>
                                <input value="<?php echo $quoteData['clientName']; ?>" type="text" name="clientName" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label class="control-label">Address</label>
                                <input value="<?php echo $quoteData['clientAddress']; ?>" type="text" name="clientAddress" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Phone</label>
                                <input value="<?php echo $quoteData['clientPhone']; ?>" type="text" name="clientPhone" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <input value="<?php echo $quoteData['clientEmail']; ?>" type="text" name="clientEmail" class="form-control" />
                            </div>
                        </div>
                    </div><!-- row -->
                </div>
                <div class="form-group">
                    <span><strong>TIMBER</strong></span>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Timber Type</label>
                                <input value="<?php echo $quoteData['timberType']; ?>" type="text" name="timberType" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Size</label>
                                <input value="<?php echo $quoteData['timberSize']; ?>" type="text" name="timberSize" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Price</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input id="timberPrice" value="<?php echo $quoteData['timberPrice']; ?>" type="text" name="timberPrice" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Area</label>
                                <div class="input-group">
                                    <input id="timberArea" value="<?php echo $quoteData['timberArea']; ?>" type="text" name="timberArea" class="form-control" />
                                    <span class="input-group-addon">m<sup>2</sup></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Wastage</label>
                                <div class="input-group">
                                    <input id="timberWastage" value="<?php echo $quoteData['timberWastage']; ?>" type="text" name="timberWastage" class="form-control" />
                                    <span class="input-group-addon">%</span>
                                </div>
                            </div>
                        </div>

                    </div><!-- row -->
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Total</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input id="timberTotal" value="<?php echo number_format($quoteData['timberTotal'],2, '.', ''); ?>" type="text" name="timberTotal" class="form-control" />
                                    <span class="input-group-btn">
                                        <button id="timberTotalCalculate" type="button" class="btn btn-default">Calculate</button>
                                    </span>
                                    <span class="input-group-btn">
                                        <button id="timberTotalClear" type="button" class="btn btn-default">Clear</button>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <span><strong>UNDERLAY</strong></span>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Price</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo $quoteData['underlayPrice']; ?>" id="underlayPrice" name="underlayPrice" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Area</label>
                                <div class="input-group">
                                    <input value="<?php echo $quoteData['underlayArea']; ?>" id="underlayArea" name="underlayArea" type="text" class="form-control" />
                                    <span class="input-group-addon">m<sup>2</sup></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Total</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo number_format($quoteData['underlayTotal'],2, '.', ''); ?>" id="underlayTotal" name="underlayTotal" type="text" class="form-control" />
                                    <span class="input-group-btn">
                                        <button id="underlayTotalCalculate" type="button" class="btn btn-default">Calculate</button>
                                    </span>
                                    <span class="input-group-btn">
                                        <button id="underlayTotalClear" type="button" class="btn btn-default">Clear</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <span><strong>CARPET REMOVAL</strong></span>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Price</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo $quoteData['carpetRemovalPrice']; ?>" id="carpetRemovalPrice" name="carpetRemovalPrice" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Area</label>
                                <div class="input-group">
                                    <input value="<?php echo $quoteData['carpetRemovalArea']; ?>" id="carpetRemovalArea" name="carpetRemovalArea" type="text" class="form-control" />
                                    <span class="input-group-addon">m<sup>2</sup></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Total</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo number_format($quoteData['carpetRemovalTotal'],2, '.', ''); ?>" id="carpetRemovalTotal" name="carpetRemovalTotal" type="text" class="form-control" />
                            <span class="input-group-btn">
                                <button id="carpetRemovalTotalCalculate" type="button" class="btn btn-default">Calculate</button>
                            </span>
                            <span class="input-group-btn">
                                <button id="carpetRemovalTotalClear" type="button" class="btn btn-default">Clear</button>
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <span><strong>FURNITURE REMOVAL</strong></span>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Price</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo $quoteData['furnitureRemovalPrice']; ?>" id="furnitureRemovalPrice" name="furnitureRemovalPrice" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Quantity</label>
                                <div class="input-group">
                                    <input value="<?php echo $quoteData['furnitureRemovalQuantity']; ?>" id="furnitureRemovalQuantity" name="furnitureRemovalQuantity" type="text" class="form-control" />
                                    <span class="input-group-addon">m<sup>2</sup></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Total</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo number_format($quoteData['furnitureRemovalTotal'],2, '.', ''); ?>" id="furnitureRemovalTotal" name="furnitureRemovalTotal" type="text" class="form-control" />
                            <span class="input-group-btn">
                                <button id="furnitureRemovalTotalCalculate" type="button" class="btn btn-default">Calculate</button>
                            </span>
                            <span class="input-group-btn">
                                <button id="furnitureRemovalTotalClear" type="button" class="btn btn-default">Clear</button>
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <span><strong>FLOOR LEVELING</strong></span>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Price</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo $quoteData['floorLevelingPrice']; ?>" id="floorLevelingPrice" name="floorLevelingPrice" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Area</label>
                                <div class="input-group">
                                    <input value="<?php echo $quoteData['floorLevelingArea']; ?>" id="floorLevelingArea" name="floorLevelingArea" type="text" class="form-control" />
                                    <span class="input-group-addon">m<sup>2</sup></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Total</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo number_format($quoteData['floorLevelingTotal'],2, '.', ''); ?>" id="floorLevelingTotal" name="floorLevelingTotal" type="text" class="form-control" />
                            <span class="input-group-btn">
                                <button id="floorLevelingTotalCalculate" type="button" class="btn btn-default">Calculate</button>
                            </span>
                            <span class="input-group-btn">
                                <button id="floorLevelingTotalClear" type="button" class="btn btn-default">Clear</button>
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <span><strong>SCOTIA/SKIRTING</strong></span>
                    <div class="row">
                            <input type="radio" name="installChoice" id="scotia" value="scotia" <?php if($quoteData['installChoice']=="scotia"){ echo "checked";} ?>>
                            <label for="scotia">Scotia</label>

                            <input type="radio" name="installChoice" id="skirting" value="skirting" <?php if($quoteData['installChoice']=="skirting"){ echo "checked";} ?> >
                            <label for="skirting">Skirting</label>
                    </div>
                    <div class="row skirtingBox" >
                        <div class="row">
                            <div class="col-sm-4">
                                <input type="radio" name="skirtingChoice" id="skirtingChoice1" value="skirtingChoice1" <?php if($quoteData['skirtingChoice']=="skirtingChoice1"){ echo "checked";} ?> >
                                <label for="skirtingChoice1">Install</label>

                                <input type="radio" name="skirtingChoice" id="skirtingChoice2" value="skirtingChoice2" <?php if($quoteData['skirtingChoice']=="skirtingChoice2"){ echo "checked";} ?> >
                                <label for="skirtingChoice2">Supply & Install</label>
                            </div>
                        </div>
                    </div>
                    <div class="row skirtingBox">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Price</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo $quoteData['skirtingPrice']; ?>" id="skirtingPrice" name="skirtingPrice" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Length</label>
                                <div class="input-group">
                                    <input value="<?php echo $quoteData['skirtingLength']; ?>" id="skirtingLength" name="skirtingLength" type="text" class="form-control" />
                                    <span class="input-group-addon">m</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Total</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo number_format($quoteData['skirtingTotal'],2, '.', ''); ?>" id="skirtingTotal" name="skirtingTotal" type="text" class="form-control" />
                                    <span class="input-group-btn">
                                        <button id="skirtingTotalCalculate" type="button" class="btn btn-default">Calculate</button>
                                    </span>
                                    <span class="input-group-btn">
                                        <button id="skirtingTotalClear" type="button" class="btn btn-default">Clear</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <span><strong>DELIVERY</strong></span>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Price</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo $quoteData['deliveryFeeTotal']; ?>" id="deliveryFeeTotal" name="deliveryFeeTotal" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <span><strong>Aluminum Trim</strong></span>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Color</label>
                                <input value="<?php echo $quoteData['atColor']; ?>" id="atColor" name="atColor" type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Price</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo $quoteData['atPrice']; ?>" id="atPrice" name="atPrice" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Length</label>
                                <div class="input-group">
                                    <input value="<?php echo $quoteData['atLength']; ?>" id="atLength" name="atLength" type="text" class="form-control" />
                                    <span class="input-group-addon">m</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Total</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo number_format($quoteData['atTotal'],2, '.', ''); ?>" id="atTotal" name="atTotal" type="text" class="form-control" />
                            <span class="input-group-btn">
                                <button id="atTotalCalculate" type="button" class="btn btn-default">Calculate</button>
                            </span>
                            <span class="input-group-btn">
                                <button id="atTotalClear" type="button" class="btn btn-default">Clear</button>
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <span><strong>Extra Items</strong></span>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Item 1 Name</label>
                                <input value="<?php echo $quoteData['extraItem1Name']; ?>" id="item1Name" name="item1Name" type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Price</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo $quoteData['extraItem1Price']; ?>" id="item1Price" name="item1Price" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Quantity</label>
                                <input value="<?php echo $quoteData['extraItem1Quantity']; ?>" id="item1Quantity" name="item1Quantity" type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Total</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo number_format($quoteData['extraItem1Total'],2, '.', ''); ?>" id="item1Total" name="item1Total" type="text" class="form-control" />
                            <span class="input-group-btn">
                                <button id="item1TotalCalculate" type="button" class="btn btn-default">Calculate</button>
                            </span>
                            <span class="input-group-btn">
                                <button id="item1TotalClear" type="button" class="btn btn-default">Clear</button>
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Item 2 Name</label>
                                <input value="<?php echo $quoteData['extraItem2Name']; ?>" id="item2Name" name="item2Name" type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Price</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo $quoteData['extraItem2Price']; ?>" id="item2Price" name="item2Price" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Quantity</label>
                                <input value="<?php echo $quoteData['extraItem2Quantity']; ?>" id="item2Quantity" name="item2Quantity" type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Total</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo number_format($quoteData['extraItem2Total'],2, '.', ''); ?>" id="item2Total" name="item2Total" type="text" class="form-control" />
                            <span class="input-group-btn">
                                <button id="item2TotalCalculate" type="button" class="btn btn-default">Calculate</button>
                            </span>
                            <span class="input-group-btn">
                                <button id="item2TotalClear" type="button" class="btn btn-default">Clear</button>
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Item 3 Name</label>
                                <input value="<?php echo $quoteData['extraItem3Name']; ?>" id="item3Name" name="item3Name" type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Price</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo $quoteData['extraItem3Price']; ?>" id="item3Price" name="item3Price" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Quantity</label>
                                <input value="<?php echo $quoteData['extraItem3Quantity']; ?>" id="item3Quantity" name="item3Quantity" type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Total</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo number_format($quoteData['extraItem3Total'],2, '.', ''); ?>" id="item3Total" name="item3Total" type="text" class="form-control" />
                            <span class="input-group-btn">
                                <button id="item3TotalCalculate" type="button" class="btn btn-default">Calculate</button>
                            </span>
                            <span class="input-group-btn">
                                <button id="item3TotalClear" type="button" class="btn btn-default">Clear</button>
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label class="control-label">TOTAL PRICE</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo number_format($quoteData['finalTotal'],2, '.', ''); ?>" id="finalTotal" name="finalTotal" readonly="readonly" type="text" class="form-control" />
                                    <span class="input-group-btn">
                                        <button id="totalPriceCalculate" type="button" class="btn btn-default">Calculate</button>
                                    </span>
                                    <span class="input-group-btn">
                                        <button id="totalPriceClear" type="button" class="btn btn-default">Clear</button>
                                    </span>
                                    <span class="input-group-btn">
                                        <button id="totalPriceEdit" type="button" class="btn btn-default" data-backdrop="static"  data-toggle="modal" data-target="#popupEditTotalPrice"><i class="glyphicon glyphicon-pencil"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3" style="padding-top: 56px;">
                            <span id="reducedPriceDisplay">Saved: $<span id="reducedPrice"></span></span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Deposit with order 10%</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo number_format($quoteData['paymentTerm1'],2, '.', ''); ?>" id="paymentTerm1" name="paymentTerm1" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">On Delivery of material 70%</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo number_format($quoteData['paymentTerm2'],2, '.', ''); ?>" id="paymentTerm2" name="paymentTerm2" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Balance on completion 20%</label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input value="<?php echo number_format($quoteData['paymentTerm3'],2, '.', ''); ?>" id="paymentTerm3" name="paymentTerm3" type="text" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="refreshPaymentTerms" class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i> Calculate Payments</button>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="col-sm-7">
                                    <label class="control-label">Notes</label>
                                    <textarea id="notes" name="notes" class="form-control" rows="5" value="a"><?php echo $quoteData['notes']; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                    <button id="saveQuoteBtn" class="btn btn-success btn-lg" style="width: 190px;margin-right:20px;margin-left:20px;margin-top:20px;">Save Quote</button>
                    <a href="quotes.php"  class="btn btn-danger btn-lg cancelSaveQuoteBtn" style="width: 140px;margin-top:20px;">Cancel</a>
                    </div>
                </div>
            </form>


        </div><!-- panel-body -->
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
    })
</script>

</body>
</html>