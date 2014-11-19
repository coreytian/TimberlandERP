<?php include("header.php");?>

<!--<div class="pageheader">
    <h2><i class="fa fa-edit"></i>Create Quote </h2>
    <div class="breadcrumb-wrapper">
        <span class="label">You are here:</span>
        <ol class="breadcrumb">
            <li><a href="index.php">Admin</a></li>
            <li class="active">Create Quote</li>
        </ol>
    </div>
</div>-->
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
        <form id="editQuoteForm" class="form-horizontal form-bordered">
        <div class="panel-body-1 panel-body">
            <input id="quoteId" name="quoteId" type="hidden"/>
            <input id="quoteType" name="quoteType" type="hidden" value="floating"/>
            <div style="border-top:none;" class="form-group">

                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Quote Number</label>
                            <input id="quoteNumber" type="text" name="quoteNumber" class="form-control"/>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Quote Date</label>
                            <div class="input-group">
                                <input  id="datepicker" type="text" name="quoteDate" class="form-control"/>
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Consultant1</label>
                            <input id="consultant1" type="text" name="consultant1" class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Consultant2</label>
                            <input id="consultant2" type="text" name="consultant2" class="form-control" />
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
                            <input id="clientName" type="text" name="clientName" class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label class="control-label">Address</label>
                            <input id="clientAddress" type="text" name="clientAddress" class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Phone</label>
                            <input id="clientPhone" type="text" name="clientPhone" class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input id="clientEmail" type="text" name="clientEmail" class="form-control" />
                        </div>
                    </div>
                </div><!-- row -->
            </div>
        </div>
        <div class="panel-body-2 panel-body">
            <div id="enable-tabs" class="form-group">
                <div class="btn-group row-top">
                    <button id="enableTimber" data-display="enable-tab-1" type="button" class="tab-inactive btn btn-default" style="border-bottom-left-radius: 0;">Timber</button>
                    <button id="enableUnderlay" data-display="enable-tab-2" type="button" class="tab-inactive btn btn-default">Underlay</button>
                    <button id="enableCarpetRemoval" data-display="enable-tab-3" type="button" class="tab-inactive btn btn-default">Carpet</button>
                    <button id="enableFurnitureRemoval" data-display="enable-tab-4" type="button" class="tab-inactive btn btn-default">Furniture</button>
                    <button id="enableFloorLeveling" data-display="enable-tab-5" type="button" class="tab-inactive btn btn-default">Floor Leveling</button>
                    <button id="enableInstall" data-display="enable-tab-6" type="button" class="tab-inactive btn btn-default">Scotia/Skirting</button>
                    <button id="enableDelivery" data-display="enable-tab-7" type="button" class="tab-inactive btn btn-default">Delivery</button>
                </div>
                <div class="btn-group row-bot">
                    <button id="enableAt" data-display="enable-tab-8" type="button" class="tab-inactive btn btn-default" style="border-top-left-radius: 0;">Aluminum Trim</button>
                    <button id="enableExtraItems" data-display="enable-tab-9" type="button" class="tab-inactive btn btn-default" style="border-top-right-radius: 0;">Extra Items</button>
                </div>
            </div>
            <div class="enable-tab-1 form-group">
                <span><strong>TIMBER</strong></span>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Timber Type</label>
                            <input id="timberType" type="text" name="timberType" class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Size</label>
                            <input id="timberSize" type="text" name="timberSize" class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Price</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="timberPrice" type="text" name="timberPrice" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Area</label>
                            <div class="input-group">
                                <input id="timberArea" type="text" name="timberArea" class="form-control" />
                                <span class="input-group-addon">m<sup>2</sup></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Wastage</label>
                            <div class="input-group">
                                <input id="timberWastage" type="text" name="timberWastage" class="form-control" />
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
                                <input id="timberTotal" type="text" name="timberTotal" class="form-control" />
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
            <div class="enable-tab-2 form-group">
                <span><strong>UNDERLAY</strong></span>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Price</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="underlayPrice" name="underlayPrice" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Area</label>
                            <div class="input-group">
                                <input id="underlayArea" name="underlayArea" type="text" class="form-control" />
                                <span class="input-group-addon">m<sup>2</sup></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Total</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="underlayTotal" name="underlayTotal" type="text" class="form-control" />
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
            <div class="enable-tab-3 form-group">
                <span><strong>CARPET REMOVAL</strong></span>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Price</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="carpetRemovalPrice" name="carpetRemovalPrice" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Area</label>
                            <div class="input-group">
                                <input id="carpetRemovalArea" name="carpetRemovalArea" type="text" class="form-control" />
                                <span class="input-group-addon">m<sup>2</sup></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Total</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="carpetRemovalTotal" name="carpetRemovalTotal" type="text" class="form-control" />
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
            <div class="enable-tab-4 form-group">
                <span><strong>FURNITURE REMOVAL</strong></span>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Price</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="furnitureRemovalPrice" name="furnitureRemovalPrice" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Quantity</label>
                            <div class="input-group">
                                <input id="furnitureRemovalQuantity" name="furnitureRemovalQuantity" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Total</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="furnitureRemovalTotal" name="furnitureRemovalTotal" type="text" class="form-control" />
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
            <div class="enable-tab-5 form-group">
                <span><strong>FLOOR LEVELING</strong></span>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Price</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="floorLevelingPrice" name="floorLevelingPrice" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Area</label>
                            <div class="input-group">
                                <input id="floorLevelingArea" name="floorLevelingArea" type="text" class="form-control" />
                                <span class="input-group-addon">m<sup>2</sup></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Total</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="floorLevelingTotal" name="floorLevelingTotal" type="text" class="form-control" />
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
            <div class="enable-tab-6 form-group">
                <span><strong>SCOTIA/SKIRTING</strong></span>
                <div class="row">
                    <input type="radio" name="installChoice" id="scotia" value="scotia" checked >
                    <label for="scotia">Scotia</label>

                    <input type="radio" name="installChoice" id="skirting" value="skirting" >
                    <label for="skirting">Skirting</label>
                </div>
                <div class="row skirtingBox" >
                    <div class="row">
                        <div class="col-sm-4">
                            <input type="radio" name="skirtingChoice" id="skirtingChoice1" value="skirtingChoice1" checked >
                            <label for="skirtingChoice1">Install</label>

                            <input type="radio" name="skirtingChoice" id="skirtingChoice2" value="skirtingChoice2" >
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
                                <input id="skirtingPrice" name="skirtingPrice" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Length</label>
                            <div class="input-group">
                                <input id="skirtingLength" name="skirtingLength" type="text" class="form-control" />
                                <span class="input-group-addon">m</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Total</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="skirtingTotal" name="skirtingTotal" type="text" class="form-control" />
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
            <div class="enable-tab-7 form-group">
                <span><strong>DELIVERY</strong></span>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Price</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="deliveryFeeTotal" name="deliveryFeeTotal" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="enable-tab-8 form-group">
                <span><strong>Aluminum Trim</strong></span>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Color</label>
                            <input id="atColor" name="atColor" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Price</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="atPrice" name="atPrice" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Length</label>
                            <div class="input-group">
                                <input id="atLength" name="atLength" type="text" class="form-control" />
                                <span class="input-group-addon">m</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Total</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="atTotal" name="atTotal" type="text" class="form-control" />
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
            <div class="enable-tab-9 form-group">
                <span><strong>Extra Items</strong></span>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Item 1 Name</label>
                            <input id="item1Name" name="item1Name" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Price</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="item1Price" name="item1Price" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Quantity</label>
                            <input id="item1Quantity" name="item1Quantity" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Total</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="item1Total" name="item1Total" type="text" class="form-control" />
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
                            <input id="item2Name" name="item2Name" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Price</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="item2Price" name="item2Price" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Quantity</label>
                            <input id="item2Quantity" name="item2Quantity" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Total</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="item2Total" name="item2Total" type="text" class="form-control" />
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
                            <input id="item3Name" name="item3Name" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Price</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="item3Price" name="item3Price" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">Quantity</label>
                            <input id="item3Quantity" name="item3Quantity" type="text" class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Total</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="item3Total" name="item3Total" type="text" class="form-control" />
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
        </div>
        <div class="panel-body-3 panel-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label class="control-label">TOTAL PRICE</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="finalTotal" name="finalTotal" readonly="readonly" type="text" class="form-control" />
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
                    <div class="col-sm-3" style="padding-top: 48px;">
                        <span id="reducedPriceDisplay"> Basic Price: $<span id="basicPrice"></span><br/>Saved: $<span id="reducedPrice"></span></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Deposit with order 10%</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="paymentTerm1" name="paymentTerm1" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">On Delivery of material 70%</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="paymentTerm2" name="paymentTerm2" type="text" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="control-label">Balance on completion 20%</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="paymentTerm3" name="paymentTerm3" type="text" class="form-control" />
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
                                <textarea id="notes" name="notes" class="form-control" rows="5" value="a"></textarea>
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
        </div><!-- panel-body -->
        </form>
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