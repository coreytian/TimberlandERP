<?php
include_once("../page/quoteController.php");
$quoteId = $_GET['quoteid'];

$quoteData = $quote->getQuote($quoteId);

function check_and_number_format($value){
    $value = trim($value);
    if(is_numeric($value)){
        return number_format($value, 2);
    }
    return '';
}
// Include the main TCPDF library (search for installation path).
require_once('../include/tcpdf/examples/config/tcpdf_config_alt.php');

require_once('../include/tcpdf/tcpdf.php');
function checkChinese($string, $pdf){
    if(preg_match('/\p{Han}+/u', $string)){
        $pdf->SetFont('kozminproregular', '', 10);
    }
}

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Timberland Flooring');
$pdf->SetTitle('Timberland Flooring Quotation');
$pdf->SetSubject('Timberland Flooring Quotation');

$pdf->SetTextColor(20,20,20);
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


$html = '<img src="../include/img/timberlogo.jpg" style="margin:0;width:150px"/><h4>Timberland Flooring Quotation</h4>';

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
$pdf->Ln(3);
$notesY = $pdf->GetY();
$pdf->setCellPaddings(0, 0, 2, 0);
$cell1Width = 50;
$cell2Width = 30;
$cell1X = 115;

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell($cell1Width, 8, 'Sub Total:', 0, 'R', false, 0, $cell1X, '', true, 0, false, true, 8, 'M', true);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell($cell2Width, 8, '$'.check_and_number_format($quoteData['calculatedTotal']), 0, 'R', false, 1, '', '', true, 0, false, true, 8, 'M', true);

$diff =  $quoteData['finalTotal'] - $quoteData['calculatedTotal'];
if($diff > 0){
    $pdf->SetFont('helvetica', 'B', 10);
    $pdf->MultiCell($cell1Width, 8, 'Add:', 0, 'R', false, 0, $cell1X, '', true, 0, false, true, 8, 'M', true);
    $pdf->SetFont('helvetica', '', 10);
    $pdf->MultiCell($cell2Width, 8, '+'.check_and_number_format($diff), 0, 'R', false, 1, '', '', true, 0, false, true, 8, 'M', true);
} elseif($diff < 0){
    $pdf->SetFont('helvetica', 'B', 10);
    $pdf->MultiCell($cell1Width, 8, 'Discount:', 0, 'R', false, 0, $cell1X, '', true, 0, false, true, 8, 'M', true);
    $pdf->SetFont('helvetica', '', 10);
    $pdf->MultiCell($cell2Width, 8, check_and_number_format($diff), 0, 'R', false, 1, '', '', true, 0, false, true, 8, 'M', true);
}
$pdf->SetFont('helvetica', 'B', 15);
$pdf->MultiCell($cell1Width, 10, 'Total:', 0, 'R', 1, 0, $cell1X, '', true, 0, false, true, 10, 'M', true);
$pdf->SetFont('helvetica', '', 13);
$pdf->MultiCell($cell2Width, 10, '$'.check_and_number_format($quoteData['finalTotal']), 0, 'R', 1, 1, '', '', true, 0, false, true, 10, 'M', true);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell($cell1Width, 7, 'Deposit with order 10%:', 0, 'R', false, 0, $cell1X, '', true, 0, false, true, 8, 'M', true);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell($cell2Width, 7, '$'.check_and_number_format($quoteData['paymentTerm1']), 0, 'R', false, 1, '', '', true, 0, false, true, 8, 'M', true);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell($cell1Width, 7, 'On Delivery of material 70%:', 0, 'R', false, 0, $cell1X, '', true, 0, false, true, 8, 'M', true);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell($cell2Width, 7, '$'.check_and_number_format($quoteData['paymentTerm2']), 0, 'R', false, 1, '', '', true, 0, false, true, 8, 'M', true);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell($cell1Width, 7, 'Balance on completion 20%:', 0, 'R', false, 0, $cell1X, '', true, 0, false, true, 8, 'M', true);
$pdf->SetFont('helvetica', '', 10);
$pdf->MultiCell($cell2Width, 7, '$'.check_and_number_format($quoteData['paymentTerm3']), 0, 'R', false, 1, '', '', true, 0, false, true, 8, 'M', true);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell(90, 5, "Notes", 0, 'L', false, 1, '', $notesY, true, 0, false, true, 8, 'M', true);

$pdf->SetFont('helvetica', '', 10);
$notes = $quoteData['notes'];
checkChinese($notes, $pdf);
$pdf->setCellHeightRatio(1.8);

$pdf->MultiCell(90, 12, $notes, 0, 'L', false, 0, '', '', true, 0, false, true, 70, 'T', true);
$pdf->SetFont('helvetica', '', 10);

$dest = "I";
if(isset($_GET['download'])){
    $dest = "D";
}
if (ob_get_contents()) ob_end_clean();
//Close and output PDF document
$pdf->Output('Quoate_'.$quoteData['quoteNumber'].'.pdf', $dest);

//============================================================+
// END OF FILE
//============================================================+
