<?php
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Floating Quote Form</title>

    <link rel="stylesheet" href="../include/css/tl.css">
    <link rel="stylesheet" href="../include/css/jquery.mobile-1.4.3.min.css">

    <link rel="stylesheet" href="quotation1.css">

    <script src="../include/js/jquery.min.js"></script>
    <script src="../include/js/jquery.mobile-1.4.3.min.js"></script>
    <script src="quotation1.js"></script>

</head>

<div data-role="page">
    <div data-role="header">
        <h1>Timberland Flooring Quotation</h1>
    </div>
    <div data-role="main" class="ui-content">
    <form id="quotationForm">
        <input id="quoteId" name="quoteId" type="hidden" value=""/>
        <input id="quoteType" name="quoteType" type="hidden" value="floating"/>
        <ul id="quoteHeadSection" data-role="listview" data-inset="true" style="margin:10px">
            <li class="ui-field-contain">
                <div class="ui-grid-b">
                    <div id="quoteBasicDiv" class="ui-block-a" style="width:35%;">
                        <div style="padding-top: 6px;padding-bottom: 10px;">
                            <span id="quoteInfoTitle">Quote Info</span>
                        </div>
                        <div class="ui-field-contain">
                            <label for="quoteNumber">Quote Number</label>
                            <div  data-role="controlgroup" data-type="horizontal" class="button-slim"  data-mini="true" style="width: 180px">
                                <input id="quoteNumber" name="quoteNumber" class="input-basic" data-wrapper-class="controlgroup-textinput ui-btn" type="text" value="<?php echo "Quote No"; ?>"/>
                            </div>
                        </div>
                        <div class="ui-field-contain">
                            <label for="quoteDate">Quote Date</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim"  data-mini="true" style="width: 180px">
                                <input id="quoteDate" name="quoteDate" class="input-basic" data-wrapper-class="controlgroup-textinput ui-btn" type="date" value="<?php echo date('Y-m-d'); ?>"/>
                            </div>
                        </div>
                        <div class="ui-field-contain consultantDiv">
                            <label for="consultant1">Consultant</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true"style="width:180px">
                                <input id="consultant1" name="consultant1" data-wrapper-class="controlgroup-textinput ui-btn" type="text"/>
                                <select id="consultant1Select">
                                    <option value="" >Please Select...</option>
                                    <option value="Consultant Name1">Consultant Name1</option>
                                    <option value="Consultant Name2">Consultant Name2</option>
                                    <option value="Consultant Name3">Consultant Name3</option>
                                </select>
                            </div>
                        </div>
                        <div class="ui-field-contain consultantDiv">
                            <label for="consultant2"></label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true"style="width:180px">
                                <input id="consultant2" name="consultant2" data-wrapper-class="controlgroup-textinput ui-btn" type="text"/>
                                <select id="consultant2Select">
                                    <option value="" >Please Select...</option>
                                    <option value="Consultant Name1">Consultant Name1</option>
                                    <option value="Consultant Name2">Consultant Name2</option>
                                    <option value="Consultant Name3">Consultant Name3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="quoteClientDiv" class="ui-block-b"style="width:47%">
                        <div style="padding-top: 0px;padding-bottom: 4px;">
                            <span id="clientInfoTitle">Client Info</span>
                            <button id="searchClientBtn" class="ui-btn ui-icon-search ui-shadow ui-corner-all ui-btn-inline ui-btn-icon-notext" style="margin: 0 0 0 230px">Find</button>
                            <button id="clearClientBtn" class="ui-btn ui-icon-delete ui-shadow ui-corner-all ui-btn-inline ui-btn-icon-notext" style="margin: 0 0 0 5px">clear</button>
                        </div>
                         <div class="ui-field-contain">
                            <label for="clientName">Name</label>
                            <div  data-role="controlgroup" data-type="horizontal" class="button-slim"  data-mini="true" style="width: 280px">
                                <input id="clientName" name="clientName" class="input-client" data-wrapper-class="controlgroup-textinput ui-btn" type="text"/>
                            </div>
                        </div>
                        <div class="ui-field-contain">
                            <label for="clientAddress">Address</label>
                            <div  data-role="controlgroup" data-type="horizontal" class="button-slim"  data-mini="true" style="width: 280px">
                                <input id="clientAddress" name="clientAddress" class="input-client" data-wrapper-class="controlgroup-textinput ui-btn" type="text"/>
                            </div>
                        </div>
                        <div class="ui-field-contain">
                            <label for="clientPhone">Phone</label>
                            <div  data-role="controlgroup" data-type="horizontal" class="button-slim"  data-mini="true" style="width: 280px">
                                <input id="clientPhone" name="clientPhone" class="input-client" data-wrapper-class="controlgroup-textinput ui-btn" type="text"/>
                            </div>
                        </div>
                        <div class="ui-field-contain">
                            <label for="clientEmail">Email</label>
                            <div  data-role="controlgroup" data-type="horizontal" class="button-slim"  data-mini="true" style="width: 280px">
                                <input id="clientEmail" name="clientEmail" class="input-client" data-wrapper-class="controlgroup-textinput ui-btn" type="text"/>
                            </div>
                        </div>
                    </div>

                    <div id="quoteLogo" class="ui-block-c"style="width:18%">
                        <img src="../include/img/timberlogo.jpg" style="width: 100%;margin-top: 54px;">
                    </div>
            </li>
        </ul>

        <ul id="quoteBodySection" data-role="listview" data-inset="true" style="margin:10px">

            <li class="ui-field-contain">
                <h4>Timber</h4>
                <div class="ui-grid-b section1">
                    <div class="ui-block-a" style="width:38%">
                        <div class="ui-field-contain">
                            <label for="timberType">Timber Type</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true"style="width:250px">
                                <input id="timberType" name="timberType" data-wrapper-class="controlgroup-textinput ui-btn" type="text"/>
                                <select id="timberTypeSelect">
                                    <option value="" >Please Select...</option>
                                    <option value="90">Timber Type 1</option>
                                    <option value="80">Timber Type 2</option>
                                    <option value="70">Timber Type 3</option>
                                    <option value="60">Timber Type 4</option>
                                    <option value="50">Timber Type 5</option>
                                    <option value="40">Timber Type 6</option>
                                    <option value="30">Timber Type 7</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="ui-block-b" style="width:22%">
                        <div class="ui-field-contain">
                            <label for="timberSize">Size</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true"style="width:150px">
                                <input id="timberSize" name="timberSize" data-wrapper-class="controlgroup-textinput ui-btn" type="text"/>
                                <select id="timberSizeSelect">
                                    <option value="" >Please Select...</option>
                                    <option value="90">90</option>
                                    <option value="120">120</option>
                                    <option value="180">180</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="ui-block-c" style="width:19%">
                        <div class="ui-field-contain"style="">
                            <label for="timberPrice">Price</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true" style="width: 130px">
                                <button>$</button>
                                <input id="timberPrice" name="timberPrice" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                            </div>
                        </div>
                    </div>

                    <div class="ui-block-d" style="width:19%">
                        <div class="ui-field-contain">
                            <label for="timberArea">Area</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim"  data-mini="true" style="width: 130px">
                                <input id="timberArea" name="timberArea" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                <button>m<sup style="font-size: 8px;">2</sup></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ui-grid-b section2">
                    <div class="ui-block-b" style="width:25%">
                        <div class="ui-field-contain">
                            <label for="timberWastage">Wastage</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim"  data-mini="true" style="width: 150px">
                                <input id="timberWastage" name="timberWastage" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                <button>%</button>
                            </div>
                        </div>
                    </div>
                    <div class="ui-block-c" style="width:50%">
                        <div class="ui-field-contain">
                            <label for="timberTotal">Total</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true">
                                <button>$</button>
                                <input id="timberTotal" class="input-total" name="timberTotal" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                <button id="timberTotalCalculate">Calculate</button>
                                <button id="timberTotalClear">Clear</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="ui-field-contain">
                <h4>Underlay</h4>
                <div class="ui-grid-b section3">
                    <div class="ui-block-a" style="width:20%">
                        <div class="ui-field-contain"style="">
                            <label for="underlayPrice">Price</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true" style="width: 130px">
                                <button>$</button>
                                <input id="underlayPrice" name="underlayPrice" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                            </div>
                        </div>
                    </div>

                    <div class="ui-block-b" style="width:20%">
                        <div class="ui-field-contain">
                            <label for="underlaylArea">Area</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim"  data-mini="true" style="width: 130px">
                                <input id="underlayArea" name="underlayArea" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                <button>m<sup style="font-size: 8px;">2</sup></button>
                            </div>
                        </div>
                    </div>

                    <div class="ui-block-c" style="width:50%">
                        <div class="ui-field-contain">
                            <label for="underlayTotal">Total</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true">
                                <button>$</button>
                                <input id="underlayTotal" class="input-total" name="underlayTotal" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                <button id="underlayTotalCalculate">Calculate</button>
                                <button id="underlayTotalClear">Clear</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="ui-field-contain">
                <h4>Carpet Removal</h4>
                <div class="ui-grid-b section3">
                    <div class="ui-block-a" style="width:20%">
                        <div class="ui-field-contain"style="">
                        <label for="carpetRemovalPrice">Price</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true" style="width: 130px">
                                <button>$</button>
                                <input id="carpetRemovalPrice" name="carpetRemovalPrice" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                            </div>
                        </div>
                    </div>

                    <div class="ui-block-b" style="width:20%">
                        <div class="ui-field-contain">
                            <label for="carpetRemovalArea">Area</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim"  data-mini="true" style="width: 130px">
                                <input id="carpetRemovalArea" name="carpetRemovalArea" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                <button>m<sup style="font-size: 8px;">2</sup></button>
                            </div>
                        </div>
                    </div>

                    <div class="ui-block-c" style="width:50%">
                        <div class="ui-field-contain">
                            <label for="carpetRemovalTotal">Total</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true">
                                <button>$</button>
                                <input id="carpetRemovalTotal" class="input-total" name="carpetRemovalTotal" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                <button id="carpetRemovalTotalCalculate">Calculate</button>
                                <button id="carpetRemovalTotalClear">Clear</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="ui-field-contain">
                <h4>Furniture Removal</h4>
                <div class="ui-grid-b section3">
                    <div class="ui-block-a" style="width:20%">
                        <div class="ui-field-contain"style="">
                            <label for="furnitureRemovalPrice">Price</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true" style="width: 130px">
                                <button>$</button>
                                <input id="furnitureRemovalPrice" name="furnitureRemovalPrice" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                            </div>
                        </div>
                    </div>

                    <div class="ui-block-b" style="width:20%">
                        <div class="ui-field-contain">
                            <label for="furnitureRemovalQuantity">&#215;&nbsp;&nbsp;&nbsp;</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim"  data-mini="true" style="width: 130px">
                                <input id="furnitureRemovalQuantity" name="furnitureRemovalQuantity" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                            </div>
                        </div>
                    </div>
                    <div class="ui-block-c" style="width:50%">
                        <div class="ui-field-contain">
                            <label for="furnitureRemovalTotal">Total</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true">
                                <button>$</button>
                                <input id="furnitureRemovalTotal" class="input-total" name="furnitureRemovalTotal" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                <button id="furnitureRemovalTotalCalculate">Calculate</button>
                                <button id="furnitureRemovalTotalClear">Clear</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="ui-field-contain">
                <h4>Floor Leveling</h4>
                <div class="ui-grid-b section3">
                    <div class="ui-block-a" style="width:20%">
                        <div class="ui-field-contain"style="">
                            <label for="floorLevelingPrice">Price</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true" style="width: 130px">
                                <button>$</button>
                                <input id="floorLevelingPrice" name="floorLevelingPrice" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                            </div>
                        </div>
                    </div>

                    <div class="ui-block-b" style="width:20%">
                        <div class="ui-field-contain">
                            <label for="floorLevelingArea">Area</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim"  data-mini="true" style="width: 130px">
                                <input id="floorLevelingArea" name="floorLevelingArea" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                <button>m<sup style="font-size: 8px;">2</sup></button>
                            </div>
                        </div>
                    </div>

                    <div class="ui-block-c" style="width:50%">
                        <div class="ui-field-contain">
                            <label for="floorLevelingTotal">Total</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true">
                                <button>$</button>
                                <input id="floorLevelingTotal" class="input-total" name="floorLevelingTotal" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                <button id="floorLevelingTotalCalculate">Calculate</button>
                                <button id="floorLevelingTotalClear">Clear</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li class="ui-field-contain">
                <h4>Scotia/Skirting</h4>
                <fieldset data-role="controlgroup" data-type="horizontal" data-mini="true" style="padding-top: 15px;">
                    <input name="installChoice" id="scotia" value="scotia" type="radio" checked>
                    <label for="scotia">Scotia</label>
                    <input name="installChoice" id="skirting" value="skirting" type="radio">
                    <label for="skirting">Skirting</label>
                </fieldset>

                <div class="ui-grid-c section4" id="skirtingBox">
                    <div class="ui-block-a" style="width:22%;padding-top: 16px;">
                    <fieldset data-role="controlgroup"class="button-slim"  data-type="horizontal"   data-mini="true">
                        <input checked="checked" name="skirtingChoice" id="skirtingChoice1" value="skirtingChoice1" type="radio" class="installToggle">
                        <label for="skirtingChoice1">Install</label>
                        <input name="skirtingChoice" id="skirtingChoice2" value="skirtingChoice2" type="radio" class="installToggle">
                        <label for="skirtingChoice2">Supply & Install</label>
                    </fieldset>
                    </div>
                    <div class="ui-block-b" style="width:20%">
                        <div class="ui-field-contain"style="">
                            <label for="skirtingPrice">Price</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true" style="width: 130px">
                                <button>$</button>
                                <input id="skirtingPrice" name="skirtingPrice" class="input-small installToggle" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                            </div>
                        </div>
                    </div>

                    <div class="ui-block-c" style="width:20%">
                        <div class="ui-field-contain">
                            <label for="skirtingLength">Length</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim"  data-mini="true" style="width: 130px">
                                <input id="skirtingLength" name="skirtingLength" class="input-small installToggle" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                <button>m</button>
                            </div>
                        </div>
                    </div>


                    <div class="ui-block-d totalDiv" style="width:38%">
                        <div class="ui-field-contain">
                            <label for="timberTotal">Total</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true">
                                <button>$</button>
                                <input id="skirtingTotal" class="input-total installToggle" name="skirtingTotal" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                <button id="skirtingTotalCalculate" class="installToggle">Calculate</button>
                                <button id="skirtingTotalClear" class="installToggle">Clear</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="ui-field-contain">
                <h4>Delivery Fee</h4>
                <div class="ui-grid-a section5" id="skirtingBox">
                    <div class="ui-block-a">
                        <div class="ui-field-contain">
                        <label for="deliveryFeeTotal">Price</label>
                        <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true" style="width: 130px">
                            <button>$</button>
                            <input id="deliveryFeeTotal" name="deliveryFeeTotal" class="input-small installToggle" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                        </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="ui-field-contain">
                <h4>Aluminum Trim</h4>
                <div class="ui-grid-c section6">
                    <div class="ui-block-a" style="width:23%">
                        <div class="ui-field-contain">
                            <label for="atColor">Color</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true"style="width:150px">
                                <input id="atColor" name="atColor" data-wrapper-class="controlgroup-textinput ui-btn" type="text"/>
                                <select id="atColorSelect">
                                    <option value="" >Please Select...</option>
                                    <option value="Color1">Color1</option>
                                    <option value="Color2">Color2</option>
                                    <option value="Color3">Color3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="ui-block-b" style="width:20%">
                        <div class="ui-field-contain"style="">
                            <label for="atPrice">Price</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true" style="width: 130px">
                                <button>$</button>
                                <input id="atPrice" name="atPrice" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                            </div>
                        </div>
                    </div>

                    <div class="ui-block-c" style="width:20%">
                        <div class="ui-field-contain">
                            <label for="atLength">Length</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim"  data-mini="true" style="width: 130px">
                                <input id="atLength" name="atLength" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                <button>m</button>
                            </div>
                        </div>
                    </div>


                    <div class="ui-block-d totalDiv" style="width:37%">
                        <div class="ui-field-contain">
                            <label for="atTotal">Total</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true">
                                <button>$</button>
                                <input id="atTotal" class="input-total" name="atTotal" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                <button id="atTotalCalculate">Calculate</button>
                                <button id="atTotalClear">Clear</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <li id="item1" style="display:none" class="ui-field-contain">
                <h4>Item1</h4>
                <div class="ui-grid-c section6">
                    <div class="ui-block-a" style="width:23%">
                        <div class="ui-field-contain">
                            <label for="item1Name">Name</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim"  data-mini="true" style="width: 130px">
                                <input id="item1Name" name="item1Name" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="ui-block-b" style="width:20%">
                        <div class="ui-field-contain"style="">
                            <label for="item1Price">Price</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true" style="width: 130px">
                                <button>$</button>
                                <input id="item1Price" name="item1Price" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                            </div>
                        </div>
                    </div>

                    <div class="ui-block-c" style="width:20%">
                        <div class="ui-field-contain">
                            <label for="item1Quantity">&#215;&nbsp;&nbsp;&nbsp;</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim"  data-mini="true" style="width: 130px">
                                <input id="item1Quantity" name="item1Quantity" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                            </div>
                        </div>
                    </div>


                    <div class="ui-block-d totalDiv" style="width:37%">
                        <div class="ui-field-contain">
                            <label for="item1Total">Total</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true">
                                <button>$</button>
                                <input id="item1Total" class="input-total" name="item1Total" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                <button id="item1TotalCalculate">Calculate</button>
                                <button id="item1TotalClear">Clear</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li id="item2" style="display:none" class="ui-field-contain">
                <h4>Item2</h4>
                <div class="ui-grid-c section6">
                    <div class="ui-block-a" style="width:23%">
                        <div class="ui-field-contain">
                            <label for="item2Name">Name</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim"  data-mini="true" style="width: 130px">
                                <input id="item2Name" name="item2Name" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="ui-block-b" style="width:20%">
                        <div class="ui-field-contain"style="">
                            <label for="item2Price">Price</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true" style="width: 130px">
                                <button>$</button>
                                <input id="item2Price" name="item2Price" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                            </div>
                        </div>
                    </div>

                    <div class="ui-block-c" style="width:20%">
                        <div class="ui-field-contain">
                            <label for="item2Quantity">&#215;&nbsp;&nbsp;&nbsp;</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim"  data-mini="true" style="width: 130px">
                                <input id="item2Quantity" name="item2Quantity" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                            </div>
                        </div>
                    </div>


                    <div class="ui-block-d totalDiv" style="width:37%">
                        <div class="ui-field-contain">
                            <label for="item2Total">Total</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true">
                                <button>$</button>
                                <input id="item2Total" class="input-total" name="item2Total" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                <button id="item2TotalCalculate">Calculate</button>
                                <button id="item2TotalClear">Clear</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li id="item3" style="display:none" class="ui-field-contain">
                <h4>Item3</h4>
                <div class="ui-grid-c section6">
                    <div class="ui-block-a" style="width:23%">
                        <div class="ui-field-contain">
                            <label for="item3Name">Name</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim"  data-mini="true" style="width: 130px">
                                <input id="item3Name" name="item3Name" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="text"/>
                            </div>
                        </div>
                    </div>
                    <div class="ui-block-b" style="width:20%">
                        <div class="ui-field-contain"style="">
                            <label for="item3Price">Price</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true" style="width: 130px">
                                <button>$</button>
                                <input id="item3Price" name="item3Price" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                            </div>
                        </div>
                    </div>

                    <div class="ui-block-c" style="width:20%">
                        <div class="ui-field-contain">
                            <label for="item3Quantity">&#215;&nbsp;&nbsp;&nbsp;</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim"  data-mini="true" style="width: 130px">
                                <input id="item3Quantity" name="item3Quantity" class="input-small" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                            </div>
                        </div>
                    </div>


                    <div class="ui-block-d totalDiv" style="width:37%">
                        <div class="ui-field-contain">
                            <label for="item3Total">Total</label>
                            <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true">
                                <button>$</button>
                                <input id="item3Total" class="input-total" name="item3Total" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                <button id="item3TotalCalculate">Calculate</button>
                                <button id="item3TotalClear">Clear</button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li id="addMoreItemsContainer" class="ui-field-contain">
                <button id="addMoreItems" class="ui-btn ui-icon-plus ui-shadow ui-corner-all ui-btn-inline ui-btn-icon-notext" style="margin:0 10px 0 0">refresh</button>
                Add More Items...
            </li>
        </ul>
        <ul id="quoteSummarySection" data-role="listview" data-inset="true" style="margin:10px">
            <li class="ui-field-contain">
                <div class="ui-grid-c" style="padding:10px">
                    <div class="ui-block-a" style="width:15%">
                        <span id="totalPriceSpan">TOTAL:</span>
                    </div>
                    <div class="ui-block-b" style="width:15%">
                        <div id="totalPriceBox">$<span id="totalPriceNumber">0.00</span></div>
                    </div>
                    <div class="ui-block-c" style="width:25%">
                        <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true">
                            <a id="totalPriceCalculate" data-inline="true" data-mini="true" class="ui-btn ui-shadow ui-corner-all ui-btn-inline">Calculate</a>
                            <a id="totalPriceClear" data-inline="true" data-mini="true" class="ui-btn ui-shadow ui-corner-all ui-btn-inline">Clear</a>
                            <a href="#popupEditTotalPrice" data-rel="popup"  class="ui-btn ui-shadow ui-corner-all ui-icon-edit ui-btn-icon-notext ui-btn-inline">Edit</a>
                        </div>
                    </div>
                    <div class="ui-block-d" style="width:45%">
                        <button id="saveQuoteBtn" data-mini="true" data-form="ui-btn-up-e" data-theme="e" data-icon="star" class=" ui-btn ui-btn-e ui-icon-star ui-btn-icon-left ui-shadow ui-corner-all ui-btn-inline">Save</button>
                        <div id="saveResult"></div>
                        <button id="viewQuoteBtn" data-mini="true" data-form="ui-btn-up-e" data-theme="e" data-icon="star" class=" ui-btn ui-btn-e ui-icon-eye ui-btn-icon-left ui-shadow ui-corner-all ui-btn-inline">View</button>
                        <div data-role="popup" id="popupSaved" data-overlay-theme="b" data-theme="b" data-dismissible="false" style="max-width:400px;">
                            <div role="main" class="ui-content">
                                <h3 class="ui-title" style="padding:20px">Quote Saved Successfully</h3>
                                <a href="#" class="ui-btn ui-corner-all ui-shadow  ui-btn-b" data-rel="back">OK</a>
                            </div>
                        </div>
                        <div data-role="popup" id="popupView" data-overlay-theme="a" data-theme="a" style="width:800px">

                        </div>
                    </div>
                    <div class="ui-corner-all ui-popup" style="width:600px;" data-overlay-theme="a" id="popupEditTotalPrice" data-role="popup" aria-disabled="false" data-disabled="false" data-shadow="true" data-corners="true" data-transition="none" data-position-to="origin">
                        <div class="ui-corner-top ui-header ui-bar-a" data-role="header" role="banner">
                            <h1 class="ui-title" role="heading" aria-level="1">Edit Total Price</h1>
                        </div>
                        <div class="ui-corner-bottom ui-content" data-role="content" role="main">
                            <div class="ui-grid-c" style="">
                                <div class="ui-block-a" style="width:30%">
                                    Calculated Total Price
                                </div>
                                <div class="ui-block-b" style="width:50%">
                                    $<span id="popupOldTotalPriceNumber"></span><span id="popupDiff" style="color: #F60;margin-left:15px;"></span>
                                </div>
                            </div>
                            <div class="ui-grid-b" style="margin-top:20px">
                                <div class="ui-block-a" style="width:30%;padding-top:16px;font-size: 16pt;">
                                    Final Total Price
                                </div>
                                <div class="ui-block-b" style="">
                                    <div data-role="controlgroup" data-type="horizontal" style="width: 200px">
                                        <button>$</button>
                                        <input id="popupFinalTotalPrice" name="popupFinalTotalPrice" style="width:100px" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                    </div>
                                </div>
                            </div>
                            <a class="buttonPopup" data-inline="true" data-theme="d"  id="popupEditButton" data-role="button" href="#" style="float: right;">OK</a>
                            <a class="buttonPopup" data-inline="true" data-theme="d"  id="popupCancelButton" data-role="button" href="#">Cancel</a>

                        </div>
                    </div>
                </div>
<!--                <div class="ui-grid-a"  id="basicPriceDisplay" style="display:none;padding-left:10px;font-size:20px">
                    <div class="ui-block-a" style="width:15%">
                        <span>Basic Price:</span>
                    </div>
                    <div class="ui-block-b" style="width:15%">
                        <div>$<span id="basicPrice">0.00</span></div>
                    </div>
                </div>-->
                <div class="ui-grid-a"  id="reducedPriceDisplay" style="display:none;padding-left:10px;font-size:20px">
                    <div class="ui-block-a" style="width:15%">
                        <span>Saved:</span>
                    </div>
                    <div class="ui-block-b" style="width:15%">
                        <div>$<span id="reducedPrice">0.00</span></div>
                    </div>
                </div>
            </li>
            <li class="ui-field-contain">
                <div class="ui-grid-a" style="padding:0 10px">
                    <div class="ui-block-a"  style="width:55%">

                        <div style="padding-top: 4px;">
                            <span id="paymentTermsTitle">Payment Terms</span>
                            <button id="refreshPaymentTerms" class="ui-btn ui-icon-refresh ui-shadow ui-corner-all ui-btn-inline ui-btn-icon-notext" style="margin-left:10px">refresh</button>
                        </div>
                        <div id="paymentTermsDiv" >
                            <div class="ui-field-contain">
                                <label for="paymentTerm1">Deposit with order 10%</label>
                                <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true" style="width: 200px">
                                    <button>$</button>
                                    <input id="paymentTerm1" name="paymentTerm1" class="input-total" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                </div>
                            </div>
                        </div>
                        <div id="paymentTermsDiv">
                            <div class="ui-field-contain">
                                <label for="paymentTerm2">On Delivery of material 70%</label>
                                <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true" style="width: 200px">
                                    <button>$</button>
                                    <input id="paymentTerm2" name="paymentTerm2" class="input-total" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                </div>
                            </div>
                        </div>
                        <div id="paymentTermsDiv">
                            <div class="ui-field-contain">
                                <label for="paymentTerm3">Balance on completion 20%</label>
                                <div data-role="controlgroup" data-type="horizontal" class="button-slim" data-mini="true" style="width: 200px">
                                    <button>$</button>
                                    <input id="paymentTerm3" name="paymentTerm3" class="input-total" data-wrapper-class="controlgroup-textinput ui-btn" type="number"/>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div id="notesDiv" style="padding:0 10px">
                    <label for="notes">Notes:</label>
                    <textarea cols="40" rows="8" style="height: 130px;" name="notes" id="notes" data-clear-btn="true"></textarea>
                </div>

            </li>
        </ul>
    </form>

    </div>
</div>











</html>

