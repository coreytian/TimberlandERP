<form id="editQuoteForm" class="form-horizontal form-bordered">
<div class="panel-body-1 panel-body" style="padding-top:0">
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
<div style="display:none" class="enable-section enable-tab-1 form-group">
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
                    <input id="timberPrice" type="number" name="timberPrice" class="form-control" />
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label class="control-label">Area</label>
                <div class="input-group">
                    <input id="timberArea" type="number" name="timberArea" class="form-control" />
                    <span class="input-group-addon">m<sup>2</sup></span>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label class="control-label">Wastage</label>
                <div class="input-group">
                    <input id="timberWastage" type="number" name="timberWastage" class="form-control" />
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
                    <input id="timberTotal" type="number" name="timberTotal" class="form-control" />
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
<div style="display:none" class="enable-section enable-tab-2 form-group">
    <span><strong>UNDERLAY</strong></span>
    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                <label class="control-label">Price</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="underlayPrice" name="underlayPrice" type="number" class="form-control" />
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label class="control-label">Area</label>
                <div class="input-group">
                    <input id="underlayArea" name="underlayArea" type="number" class="form-control" />
                    <span class="input-group-addon">m<sup>2</sup></span>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label">Total</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="underlayTotal" name="underlayTotal" type="number" class="form-control" />
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
<div style="display:none" class="enable-section enable-tab-3 form-group">
    <span><strong>CARPET REMOVAL</strong></span>
    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                <label class="control-label">Price</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="carpetRemovalPrice" name="carpetRemovalPrice" type="number" class="form-control" />
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label class="control-label">Area</label>
                <div class="input-group">
                    <input id="carpetRemovalArea" name="carpetRemovalArea" type="number" class="form-control" />
                    <span class="input-group-addon">m<sup>2</sup></span>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label">Total</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="carpetRemovalTotal" name="carpetRemovalTotal" type="number" class="form-control" />
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
<div style="display:none" class="enable-section enable-tab-4 form-group">
    <span><strong>FURNITURE REMOVAL</strong></span>
    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                <label class="control-label">Price</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="furnitureRemovalPrice" name="furnitureRemovalPrice" type="number" class="form-control" />
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label class="control-label">Quantity</label>
                <div class="input-group">
                    <input id="furnitureRemovalQuantity" name="furnitureRemovalQuantity" type="number" class="form-control" />
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label">Total</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="furnitureRemovalTotal" name="furnitureRemovalTotal" type="number" class="form-control" />
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
<div style="display:none" class="enable-section enable-tab-5 form-group">
    <span><strong>FLOOR LEVELING</strong></span>
    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                <label class="control-label">Price</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="floorLevelingPrice" name="floorLevelingPrice" type="number" class="form-control" />
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label class="control-label">Area</label>
                <div class="input-group">
                    <input id="floorLevelingArea" name="floorLevelingArea" type="number" class="form-control" />
                    <span class="input-group-addon">m<sup>2</sup></span>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label">Total</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="floorLevelingTotal" name="floorLevelingTotal" type="number" class="form-control" />
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
<div style="display:none" class="enable-section enable-tab-6 form-group">
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
                    <input id="skirtingPrice" name="skirtingPrice" type="number" class="form-control" />
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label class="control-label">Length</label>
                <div class="input-group">
                    <input id="skirtingLength" name="skirtingLength" type="number" class="form-control" />
                    <span class="input-group-addon">m</span>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label">Total</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="skirtingTotal" name="skirtingTotal" type="number" class="form-control" />
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
<div style="display:none" class="enable-section enable-tab-7 form-group">
    <span><strong>DELIVERY</strong></span>
    <div class="row">
        <div class="col-sm-2">
            <div class="form-group">
                <label class="control-label">Price</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="deliveryFeeTotal" name="deliveryFeeTotal" type="number" class="form-control" />
                </div>
            </div>
        </div>
    </div>
</div>
<div style="display:none" class="enable-section enable-tab-8 form-group">
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
                    <input id="atPrice" name="atPrice" type="number" class="form-control" />
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label class="control-label">Length</label>
                <div class="input-group">
                    <input id="atLength" name="atLength" type="number" class="form-control" />
                    <span class="input-group-addon">m</span>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label">Total</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="atTotal" name="atTotal" type="number" class="form-control" />
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
<div style="display:none" class="enable-section enable-tab-9 form-group">
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
                    <input id="item1Price" name="item1Price" type="number" class="form-control" />
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label class="control-label">Quantity</label>
                <input id="item1Quantity" name="item1Quantity" type="number" class="form-control" />
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label">Total</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="item1Total" name="item1Total" type="number" class="form-control" />
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
                    <input id="item2Price" name="item2Price" type="number" class="form-control" />
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label class="control-label">Quantity</label>
                <input id="item2Quantity" name="item2Quantity" type="number" class="form-control" />
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label">Total</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="item2Total" name="item2Total" type="number" class="form-control" />
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
                    <input id="item3Price" name="item3Price" type="number" class="form-control" />
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-group">
                <label class="control-label">Quantity</label>
                <input id="item3Quantity" name="item3Quantity" type="number" class="form-control" />
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label">Total</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="item3Total" name="item3Total" type="number" class="form-control" />
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
            <div class="col-sm-5" style="padding-top: 10px;padding-left: 20px;">
                <span style="font-size:18pt;font-weight:bold;padding-right:25px;">TOTAL PRICE:</span>
                <div style="display:inline;font-size:19pt;">$<span id="finalTotal"></span></div>
                <div id="reducedPriceDisplay" style="font-size:16pt;padding-top:15px"><span style="padding-right:10px">Saved:</span> $<span id="reducedPrice"></span></div>

            </div>
            <div class="col-sm-4" style="">
                <div class="btn-group">
                    <button id="totalPriceCalculate" type="button" class="btn btn-default">Calculate</button>
                    <button id="totalPriceClear" type="button" class="btn btn-default">Clear</button>
                    <button id="totalPriceEdit" type="button" class="btn btn-default" data-backdrop="static"  data-toggle="modal" data-target="#popupEditTotalPrice"><i class="glyphicon glyphicon-pencil"></i></button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label">Deposit with order 10%</label>
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input id="paymentTerm1" name="paymentTerm1" type="number" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label">On Delivery of material 70%</label>
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input id="paymentTerm2" name="paymentTerm2" type="number" class="form-control" />
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label">Balance on completion 20%</label>
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input id="paymentTerm3" name="paymentTerm3" type="number" class="form-control" />
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
            <button id="saveQuoteBtn" class="btn btn-success btn-lg" style="width: 190px;margin-left:20px;margin-top:20px;">Save Quote</button>
            <a id="viewQuoteBtn" data-toggle="modal" data-target="#emptyModal"  class="btn btn-primary btn-lg" style="width: 140px;margin-top:20px;">View</a>
            <a href="quotes.php"  class="btn btn-danger btn-lg cancelSaveQuoteBtn" style="float:right;width: 140px;margin-top:20px;margin-right:400px;">Cancel</a>
        </div>
    </div>
</div><!-- panel-body -->
</form>