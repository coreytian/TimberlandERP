<form id="editQuoteForm" class="form-horizontal form-bordered">
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
    <div class="form-group">
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
    <div class="form-group">
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
    <div class="form-group">
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
    <div class="form-group">
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
    <div class="form-group">
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
    <div class="form-group">
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
    <div class="form-group">
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
    <div class="form-group">
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
    <div class="form-group">
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
</form>
