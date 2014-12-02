<form id="editContractForm" class="form-horizontal form-bordered">
<div class="panel-body-1 panel-body" style="padding-top:0">
    <input id="id" name="id" type="hidden"/>
    <input id="quoteId" name="quoteId" type="hidden"/>
    <div style="border-top:none;" class="form-group">

        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label">Contract Number</label>
                    <input id="contractNumber" type="text" name="contractNumber" class="form-control"/>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label">Quote Ref No.</label>
                    <input id="quoteNumber" type="text" name="quoteNumber" class="form-control"/>
                </div>
            </div>
        </div><!-- row -->
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label">Contractor</label>
                    <input id="contractor" type="text" name="contractor" class="form-control" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label">Address</label>
                    <input id="contractorAddress" type="text" name="contractorAddress" class="form-control" />
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label">Phone</label>
                    <input id="contractorPhone" type="text" name="contractorPhone" class="form-control" />
                </div>
            </div>
        </div><!-- row -->
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label">Owner</label>
                    <input id="clientName" type="text" name="clientName" class="form-control" />
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label class="control-label">Address</label>
                    <input id="clientAddress" type="text" name="clientAddress" class="form-control" />
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label">Mobile</label>
                    <input id="clientMobile" type="text" name="clientMobile" class="form-control" />
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label">Phone</label>
                    <input id="clientPhone" type="text" name="clientPhone" class="form-control" />
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input id="clientEmail" type="text" name="clientEmail" class="form-control" />
                </div>
            </div>
        </div><!-- row -->
    </div>
</div>
<div class="panel-body-border panel-body">
    <div class="form-group">
        <div id="ajaxViewRefQuote" style="width:800px;margin-bottom: 10px;display:none"></div>
        <div class="btn-group">
            <button id="viewRefQuoteBtn" type="button" class="btnInactive btn btn-default">View Ref Quote</button>
            <button id="descriptionTemp1Btn" type="button" class="btn btn-default">Template 1</button>
            <button id="descriptionTemp2Btn" type="button" class="btn btn-default">Template 2</button>
            <button id="descriptionTemp3Btn" type="button" class="btn btn-default">Template 3</button>
            <button id="descriptionTemp4Btn" type="button" class="btn btn-default">Template 4</button>
        </div>
        <div class="row">
            <div class="col-sm-10">
                <label class="control-label">Description Of Works</label>
                <textarea style="font-size:17px" id="description" name="description" class="form-control" rows="12" value="a"></textarea>
            </div>
        </div>
    </div>
</div>
<div class="panel-body-2 panel-body-border panel-body">
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label">Total Price</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="finalTotal" name="finalTotal" type="number" class="form-control" />
                </div>
            </div>
        </div>
    </div>
    <div class="row"style="padding-left:10px;margin-bottom: 10px;margin-top: 20px;">
        <span style="line-height: 59px;">Payment Terms</span>
        <button id="refreshPaymentTerms" class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i> Calculate Payments</button>
    </div>
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-sm-4">
                <input id="payment1Text" type="text" name="payment1Text" class="form-control"/>
        </div>
        <div class="col-sm-4">
            <div class="input-group">
                <span class="input-group-addon">$</span>
                <input id="paymentTerm1" name="paymentTerm1" type="number" class="form-control" />
            </div>
        </div>
    </div>
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-sm-4">
            <input id="payment2Text" type="text" name="payment2Text" class="form-control"/>
        </div>
        <div class="col-sm-4">
            <div class="input-group">
                <span class="input-group-addon">$</span>
                <input id="paymentTerm2" name="paymentTerm2" type="number" class="form-control" />
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <input id="payment3Text" type="text" name="payment3Text" class="form-control"/>
        </div>
        <div class="col-sm-4">
            <div class="input-group">
                <span class="input-group-addon">$</span>
                <input id="paymentTerm3" name="paymentTerm3" type="number" class="form-control" />
            </div>
        </div>
    </div>
</div>

<div class="panel-body-border panel-body">
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label">Approximate time to start</label>
                <input id="startDate" type="text" name="startDate" class="form-control"/>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label class="control-label">Date for practical completion</label>
                <input id="endDate" type="text" name="endDate" class="form-control"/>
            </div>
        </div>
    </div><!-- row -->
</div>
<div class="panel-body-border panel-body">
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label class="control-label">Signed (Installation Team)</label>
                <input id="sign1" type="text" name="sign1" class="form-control"/>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label class="control-label">Date</label>
                <input id="sign1Date" type="text" name="sign1Date" class="form-control datepicker"/>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label class="control-label">Signed (Owner)</label>
                <input id="sign2" type="text" name="sign2" class="form-control"/>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label class="control-label">Date</label>
                <input id="sign2Date" data-date-format="dd/mm/yyyy" type="text" name="sign2Date" class="form-control datepicker"/>
            </div>
        </div>
    </div><!-- row -->
    <div class="row">
        <div class="col-sm-12">
            <button id="saveContractBtn" class="btn btn-success btn-lg" style="width: 190px;margin-left:20px;margin-top:20px;">Save Contract</button>
            <a href="contracts.php"  class="btn btn-danger btn-lg cancelSaveContractBtn" style="float:right;width: 140px;margin-top:20px;margin-right:400px;">Cancel</a>
        </div>
    </div>
</div>
</form>