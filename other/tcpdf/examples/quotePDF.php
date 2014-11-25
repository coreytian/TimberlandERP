<?php
include_once("../../../page/quoteController.php");
$quoteId = 80;

$quoteData = $quote->getQuote($quoteId);

function check_and_number_format($value){
    $value = trim($value);
    if(is_numeric($value)){
        return number_format($value, 2);
    }
    return '';
}
ob_clean();
// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

function checkChinese($string, $pdf){
    if(preg_match('/\p{Han}+/u', $string)){
        $pdf->SetFont('kozminproregular', '', 20);
    }
}

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 002');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, '10px', PDF_MARGIN_RIGHT);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
//$fontname = $pdf->addTTFfont('../fonts/ARIALUNI.ttf', 'TrueTypeUnicode', '', 32);
$pdf->SetFont('helvetica', '', 14);

// add a page，
$pdf->AddPage();


$html = '<img src="../../../include/img/timberlogo.jpg" style="margin:0;width:150px"/><h4>Timberland Flooring Quotation</h4>';

$pdf->writeHTML($html, true, false, true, false, 'C');

$pdf->SetFont('helvetica', '', 10);
$pdf->SetTopMargin(55);
$subtable = '<table border="1" cellspacing="6" cellpadding="4"><tr><td>a</td><td>b</td></tr><tr><td>c</td><td>d</td></tr></table>';

$consultants = empty($quoteData['consultant2'])?$quoteData['consultant1']:$quoteData['consultant1'].', '.$quoteData['consultant2'];

$html = '<table style="" border="0" >
<tr>
<td width="45%">
<table border="0" cellspacing="5">
<tr><td height="0" width="40%"><b>Quote Number</b></td><td width="60%">'.$quoteData['quoteNumber'].'</td></tr>
<tr><td height="0"><b>Quote Date</b></td><td>'.$quoteData['quoteDate'].'</td></tr>
<tr><td height="0"><b>Consultant</b></td><td>'.$consultants.'</td></tr>
</table>
</td>
<td width="55%">
<table  border="0"  cellspacing="5">
<tr><td width="20%"></td><td  width="20%" height="0"><b>Name</b></td><td width="60%">'.$quoteData['clientName'].'</td></tr>
<tr><td></td><td height="0"><b>Address</b></td><td>'.$quoteData['clientAddress'].'</td></tr>
<tr><td></td><td height="0"><b>Phone</b></td><td>'.$quoteData['clientPhone'].'</td></tr>
<tr><td></td><td height="0"><b>Email</b></td><td>'.$quoteData['clientEmail'].'</td></tr>
</table>
</td>
</tr>
</table>
';

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

/*$html = '<table cellpadding="10px" border="1">
<tr style="text-align:center"><th>Item</th><th>Description</th><th>Unit Price</th><th>Quantity</th><th>Total Price</th></tr>
<tr><td style="border-bottom:hidden !important;">1</td><td style="border-left:1px;solid">2</td><td>3</td><td>4</td><td>5</td></tr>
<tr><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td></tr>
</table>';
$pdf->writeHTML($html, true, false, true, false, '');*/

// set border width
$pdf->SetLineWidth(0.2);

// set color for cell border
$pdf->SetDrawColor(255,255,255);

// set filling color
$pdf->SetFillColor(230,230,230);
// set cell padding
$pdf->setCellPaddings(2, 2, 2, 2);


$columnWidth = array(40,60,25,25,30);


// set cell height ratio
//$pdf->setCellHeightRatio(3);
$pdf->MultiCell($columnWidth[0], 0, '<b>Item</b>', 1, 'L', 1, 0, '', '', true, 0, true, true, 0, 'T', false);
$pdf->MultiCell($columnWidth[1], 0, '<b>Description</b>', 1, 'L', 1, 0, '', '', true, 0, true, true, 0, 'T', false);
$pdf->MultiCell($columnWidth[2], 0, '<b>Unit Price</b>', 1, 'R', 1, 0, '', '', true, 0, true, true, 0, 'T', false);
$pdf->MultiCell($columnWidth[3], 0, '<b>Quantity</b>', 1, 'R', 1, 0, '', '', true, 0, true, true, 0, 'T', false);
$pdf->MultiCell($columnWidth[4], 0, '<b>Total Price</b>', 1, 'R', 1, 1, '', '', true, 0, true, true, 0, 'T', false);

$pdf->SetDrawColor(230,230,230);
// ---------------------------------------------------------
if($quoteData['enableTimber']==1) {
    $timber = array('Timber',
                    'Timber Type: ' . $quoteData['timberType'] . "\nSize: " . $quoteData['timberSize'] . "\nWastage: " . $quoteData['timberWastage'] . '%',
                    '$'.check_and_number_format($quoteData['timberPrice']),
                    $quoteData['timberArea'].' m<sup style="font-size: 8px;">2</sup>',
                    '$'.check_and_number_format($quoteData['timberTotal']));
    $pdf->MultiCell($columnWidth[0], 18, $timber[0], 'B', 'L', false, 0, '', '', true, 0, false, true, 18, 'T', true);
    $pdf->MultiCell($columnWidth[1], 18, $timber[1], 'B', 'L', false, 0, '', '', true, 0, false, true, 18, 'T', true);
    $pdf->MultiCell($columnWidth[2], 18, $timber[2], 'B', 'R', false, 0, '', '', true, 0, false, true, 18, 'T', true);
    $pdf->MultiCell($columnWidth[3], 18, $timber[3], 'B', 'R', false, 0, '', '', true, 0, true, true, 18, 'T', true);
    $pdf->MultiCell($columnWidth[4], 18, $timber[4], 'B', 'R', false, 1, '', '', true, 0, false, true, 18, 'T', true);
}
// set cell padding
$minH = 10;
$maxH = 10;
$pdf->setCellPaddings(2, 3, 2, 2);
if($quoteData['enableUnderlay']==1) {
    $underlay = array('Underlay',
        '',
        '$'.check_and_number_format($quoteData['underlayPrice']),
        $quoteData['underlayArea'].' m<sup style="font-size: 8px;">2</sup>',
        '$'.check_and_number_format($quoteData['underlayTotal']));

    $pdf->MultiCell($columnWidth[0], $minH, $underlay[0], 'B', 'L', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[1], $minH, $underlay[1], 'B', 'L', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[2], $minH, $underlay[2], 'B', 'R', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[3], $minH, $underlay[3], 'B', 'R', false, 0, '', '', true, 0, true, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[4], $minH, $underlay[4], 'B', 'R', false, 1, '', '', true, 0, false, true, $maxH, 'T', true);
}
if($quoteData['enableCarpetRemoval']==1) {
    $carpet = array('Carpet Removal',
        '',
        '$'.check_and_number_format($quoteData['carpetRemovalPrice']),
        $quoteData['carpetRemovalArea'].' m<sup style="font-size: 8px;">2</sup>',
        '$'.check_and_number_format($quoteData['carpetRemovalTotal']));

    $pdf->MultiCell($columnWidth[0], $minH, $carpet[0], 'B', 'L', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[1], $minH, $carpet[1], 'B', 'L', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[2], $minH, $carpet[2], 'B', 'R', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[3], $minH, $carpet[3], 'B', 'R', false, 0, '', '', true, 0, true, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[4], $minH, $carpet[4], 'B', 'R', false, 1, '', '', true, 0, false, true, $maxH, 'T', true);
}
if($quoteData['enableFurnitureRemoval']==1) {
    $furniture = array('Furniture Removal',
        '',
        '$'.check_and_number_format($quoteData['furnitureRemovalPrice']),
        $quoteData['furnitureRemovalQuantity'],
        '$'.check_and_number_format($quoteData['furnitureRemovalTotal']));

    $pdf->MultiCell($columnWidth[0], $minH, $furniture[0], 'B', 'L', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[1], $minH, $furniture[1], 'B', 'L', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[2], $minH, $furniture[2], 'B', 'R', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[3], $minH, $furniture[3], 'B', 'R', false, 0, '', '', true, 0, true, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[4], $minH, $furniture[4], 'B', 'R', false, 1, '', '', true, 0, false, true, $maxH, 'T', true);
}
if($quoteData['enableFloorLeveling']==1) {
    $floor = array('Floor Leveling',
        '',
        '$'.check_and_number_format($quoteData['floorLevelingPrice']),
        $quoteData['floorLevelingArea'].' m<sup style="font-size: 8px;">2</sup>',
        '$'.check_and_number_format($quoteData['floorLevelingTotal']));

    $pdf->MultiCell($columnWidth[0], $minH, $floor[0], 'B', 'L', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[1], $minH, $floor[1], 'B', 'L', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[2], $minH, $floor[2], 'B', 'R', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[3], $minH, $floor[3], 'B', 'R', false, 0, '', '', true, 0, true, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[4], $minH, $floor[4], 'B', 'R', false, 1, '', '', true, 0, false, true, $maxH, 'T', true);
}
if($quoteData['enableInstall']==1) {
    if($quoteData['installChoice']=='skirting') {
        $installChoice = $quoteData['skirtingChoice']=='skirtingChoice2'?"Supply & Install":"Install";
        $install = array('Skirting',
            $installChoice,
            '$'.check_and_number_format($quoteData['skirtingPrice']),
            $quoteData['skirtingLength'].' m',
            '$'.check_and_number_format($quoteData['skirtingTotal']));
    } else {
        $install = array('Scotia',
            '',
            '',
            '',
            '$0');
    }


    $pdf->MultiCell($columnWidth[0], $minH, $install[0], 'B', 'L', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[1], $minH, $install[1], 'B', 'L', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[2], $minH, $install[2], 'B', 'R', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[3], $minH, $install[3], 'B', 'R', false, 0, '', '', true, 0, true, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[4], $minH, $install[4], 'B', 'R', false, 1, '', '', true, 0, false, true, $maxH, 'T', true);
}
if($quoteData['enableDelivery']==1) {
    $delivery = array('Delivery Fee',
        '',
        '',
        '',
        '$'.check_and_number_format($quoteData['deliveryFeeTotal']));

    $pdf->MultiCell($columnWidth[0], $minH, $delivery[0], 'B', 'L', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[1], $minH, $delivery[1], 'B', 'L', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[2], $minH, $delivery[2], 'B', 'R', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[3], $minH, $delivery[3], 'B', 'R', false, 0, '', '', true, 0, true, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[4], $minH, $delivery[4], 'B', 'R', false, 1, '', '', true, 0, false, true, $maxH, 'T', true);
}
if($quoteData['enableAt']==1) {
    $at = array('Aluminum Trim',
        'Color: '.$quoteData['atColor'],
        '$'.check_and_number_format($quoteData['atPrice']),
        $quoteData['atLength'].' m',
        '$'.check_and_number_format($quoteData['atTotal']));

    $pdf->MultiCell($columnWidth[0], $minH, $at[0], 'B', 'L', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[1], $minH, $at[1], 'B', 'L', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[2], $minH, $at[2], 'B', 'R', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[3], $minH, $at[3], 'B', 'R', false, 0, '', '', true, 0, true, true, $maxH, 'T', true);
    $pdf->MultiCell($columnWidth[4], $minH, $at[4], 'B', 'R', false, 1, '', '', true, 0, false, true, $maxH, 'T', true);
}
if($quoteData['enableExtraItems']==1) {
    for($i=1;$i<=3;$i++){
        if(!empty($quoteData['item'.$i.'Total']) && $quoteData['item'.$i.'Total']!=0) {
            $extra = array('Extra Item',
                $quoteData['item'.$i.'Name'],
                '$'.check_and_number_format($quoteData['item'.$i.'Price']),
                $quoteData['item'.$i.'Quantity'],
                '$'.check_and_number_format($quoteData['item'.$i.'Total']));
            $pdf->MultiCell($columnWidth[0], $minH, $extra[0], 'B', 'L', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
            $pdf->MultiCell($columnWidth[1], $minH, $extra[1], 'B', 'L', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
            $pdf->MultiCell($columnWidth[2], $minH, $extra[2], 'B', 'R', false, 0, '', '', true, 0, false, true, $maxH, 'T', true);
            $pdf->MultiCell($columnWidth[3], $minH, $extra[3], 'B', 'R', false, 0, '', '', true, 0, true, true, $maxH, 'T', true);
            $pdf->MultiCell($columnWidth[4], $minH, $extra[4], 'B', 'R', false, 1, '', '', true, 0, false, true, $maxH, 'T', true);
         }


    }



}
$pdf->addPage();



// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);

// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
$pdf->SetFillColor(255, 255, 127);

// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)

// set some text for example
$txt = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

// Multicell test
$pdf->MultiCell(55, 5, '[LEFT] '.$txt, 1, 'L', 1, 0, '', '', true);
$pdf->MultiCell(55, 5, '[RIGHT] '.$txt, 1, 'R', 0, 1, '', '', true);
$pdf->MultiCell(55, 5, '[CENTER] '.$txt, 1, 'C', 0, 0, '', '', true);
$pdf->MultiCell(55, 5, '[JUSTIFY] '.$txt."\n", 1, 'J', 1, 2, '' ,'', true);
$pdf->MultiCell(55, 5, '[DEFAULT] '.$txt, 1, '', 0, 1, '', '', true);

$pdf->Ln(4);

// set color for background
$pdf->SetFillColor(220, 255, 220);

// Vertical alignment
$pdf->MultiCell(55, 40, '[VERTICAL ALIGNMENT - TOP] '.$txt, 1, 'J', 1, 0, '', '', true, 0, false, true, 40, 'T');
$pdf->MultiCell(55, 40, '[VERTICAL ALIGNMENT - MIDDLE] '.$txt, 1, 'J', 1, 0, '', '', true, 0, false, true, 40, 'M');
$pdf->MultiCell(55, 40, '[VERTICAL ALIGNMENT - BOTTOM] '.$txt, 1, 'J', 1, 1, '', '', true, 0, false, true, 40, 'B');

$pdf->Ln(4);

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// set color for background
$pdf->SetFillColor(215, 235, 255);

// set some text for example
$txt = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed imperdiet lectus. Phasellus quis velit velit, non condimentum quam. Sed neque urna, ultrices ac volutpat vel, laoreet vitae augue. Sed vel velit erat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras eget velit nulla, eu sagittis elit. Nunc ac arcu est, in lobortis tellus. Praesent condimentum rhoncus sodales. In hac habitasse platea dictumst. Proin porta eros pharetra enim tincidunt dignissim nec vel dolor. Cras sapien elit, ornare ac dignissim eu, ultricies ac eros. Maecenas augue magna, ultrices a congue in, mollis eu nulla. Nunc venenatis massa at est eleifend faucibus. Vivamus sed risus lectus, nec interdum nunc.

Fusce et felis vitae diam lobortis sollicitudin. Aenean tincidunt accumsan nisi, id vehicula quam laoreet elementum. Phasellus egestas interdum erat, et viverra ipsum ultricies ac. Praesent sagittis augue at augue volutpat eleifend. Cras nec orci neque. Mauris bibendum posuere blandit. Donec feugiat mollis dui sit amet pellentesque. Sed a enim justo. Donec tincidunt, nisl eget elementum aliquam, odio ipsum ultrices quam, eu porttitor ligula urna at lorem. Donec varius, eros et convallis laoreet, ligula tellus consequat felis, ut ornare metus tellus sodales velit. Duis sed diam ante. Ut rutrum malesuada massa, vitae consectetur ipsum rhoncus sed. Suspendisse potenti. Pellentesque a congue massa.';

// print a blox of text using multicell()
$pdf->MultiCell(80, 5, $txt."\n", 1, 'J', 1, 1, '' ,'', true);

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// AUTO-FITTING

// set color for background
$pdf->SetFillColor(255, 235, 235);

// Fit text on cell by reducing font size
$pdf->MultiCell(55, 60, '[FIT CELL] '.$txt."\n", 1, 'J', 1, 1, 125, 145, true, 0, false, true, 60, 'M', true);

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// CUSTOM PADDING

// set color for background
$pdf->SetFillColor(255, 255, 215);

// set font
$pdf->SetFont('helvetica', '', 8);

// set cell padding
$pdf->setCellPaddings(2, 4, 6, 8);

$txt = "CUSTOM PADDING:\nLeft=2, Top=4, Right=6, Bottom=8\nLorem ipsum dolor sit amet, consectetur adipiscing elit. In sed imperdiet lectus. Phasellus quis velit velit, non condimentum quam. Sed neque urna, ultrices ac volutpat vel, laoreet vitae augue.\n";

$pdf->MultiCell(55, 5, $txt, 1, 'J', 1, 2, 125, 210, true);

// move pointer to last page
$pdf->lastPage();


//Close and output PDF document
$pdf->Output('example_002.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
