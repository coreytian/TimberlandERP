<?php
include_once("../page/contractController.php");
$contractId = $_GET['contractid'];

$contractData = $contract->getContract($contractId);

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
//    if(preg_match('/\p{Han}+/u', $string)){
//        $pdf->SetFont('kozminproregular', '');
//    }
}
// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {


    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', '', 10);
        $footer = "Timberland Flooring    Unit 2, 620-632 Botany Rd, Alexandria, NSW, 2015\nTel: 61 2 8065 7710    Fax: 61 2 8065 7380    ABN: 38164349320";

        // Page number
        $this->MultiCell(0, 0, $footer, 0, 'C', 0, 0, '', '', true, 0, false, true, 0, 'T', false);
        //$this->Cell(0, 20, $footer, 0, false, 'C', 0, '', 1, false, 'T', 'M');
    }
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Timberland Flooring');
$pdf->SetTitle('Timberland Flooring Contract');
$pdf->SetSubject('Timberland Flooring Contract');

$pdf->SetTextColor(20,20,20);
$pdf->setPrintHeader(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(18, '6', 18);

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
$pdf->SetFont('helvetica', '', 12);
$pdf->SetLineWidth(0.1);
// add a page，
$pdf->AddPage();


$html = '<img src="../include/img/timberlogo.jpg" style="margin:0;width:150px"/>';

$pdf->writeHTML($html, true, false, true, false, 'C');

$pdf->SetFont('helvetica', 'B', 18);
$pdf->setCellPaddings(0,0,10,0);
$pdf->MultiCell(0, 8, $contractData['contractNumber'], 0, 'R', 0, 1, '', '', true, 0, false, true, 0, 'T', false);

$pdf->SetFont('helvetica', '', 14);
$html= "<h4>TIMBERLAND FLOORING CONTRACT</h4>";
$pdf->writeHTML($html, true, false, true, false, 'C');

$pdf->SetFont('helvetica', '', 10);
$pdf->SetTopMargin(52);


$pdf->setCellHeightRatio(1);
$pdf->SetDrawColor(0,0,0);
$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(0,0,0);
$pdf->setCellPaddings(0,1,0,0);
$pdf->MultiCell(22, 5, 'BETWEEN', 1, 'C', 1, 0, '', '', true, 0, false, true, 0, 'M', false);
$pdf->MultiCell('', 5, '', 'TR', 'L', 0, 1, '', '', true, 0, false, true, 0, 'T', false);

$pdf->setCellHeightRatio(0.3);
$pdf->setCellPaddings(0, 0,0, 0);
$pdf->MultiCell('', 0.1, '', 'LR', 'L', 0, 1, '', '', true, 0, false, true, 0, 'T', false);
$pdf->setCellHeightRatio(1);
$pdf->setCellPaddings(2, 1, 2, 1);

$pdf->SetTextColor(0,0,0);
$pdf->MultiCell(25, 6, 'Contractor', 'L', 'L', 0, 0, '', '', true, 0, false, true, 0, 'T', false);

$pdf->SetFillColor(255,228,181);
$pdf->MultiCell(100, 6, $contractData['contractor'], 1, 'L', 1, 0, '', '', true, 0, false, true, 0, 'T', false);

$pdf->MultiCell('', 6, '', 'R', 'L', 0, 1, '', '', true, 0, false, true, 0, 'T', false);

$pdf->setCellHeightRatio(0.5);
$pdf->setCellPaddings(0, 0,0, 0);
$pdf->MultiCell('', 1, '', 'LR', 'L', 0, 1, '', '', true, 0, false, true, 0, 'T', false);
$pdf->setCellHeightRatio(1);
$pdf->setCellPaddings(2, 1, 2, 1);

$pdf->MultiCell(25, 6, 'Address', 'L', 'L', 0, 0, '', '', true, 0, false, true, 0, 'T', false);
$pdf->MultiCell(100, 6, $contractData['contractorAddress'], 1, 'L', 1, 0, '', '', true, 0, false, true, 0, 'T', false);
$pdf->MultiCell(16, 6, 'Phone', 0, 'L', 0, 0, '', '', true, 0, false, true, 0, 'T', false);
$pdf->MultiCell(28, 6, $contractData['contractorPhone'], 1, 'L', 1, 0, '', '', true, 0, false, true, 0, 'M', false);
$pdf->MultiCell('', 6, '', 'R', 'L', 0, 1, '', '', true, 0, false, true, 0, 'T', false);

$pdf->setCellPaddings(0,1,0,0);
$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(0,0,0);
$pdf->MultiCell(22, 5, 'AND', 1, 'C', 1, 0, '', '', true, 0, false, true, 0, 'M', false);
$pdf->MultiCell('', 5, '', 'R', 'L', 0, 1, '', '', true, 0, false, true, 0, 'T', false);
$pdf->setCellPaddings(2,1,2,1);
$pdf->SetTextColor(0,0,0);
$pdf->SetFillColor(255,228,181);

$pdf->setCellHeightRatio(0.3);
$pdf->setCellPaddings(0, 0,0, 0);
$pdf->MultiCell('', 1, '', 'LR', 'L', 0, 1, '', '', true, 0, false, true, 1, 'T', false);
$pdf->setCellHeightRatio(1);
$pdf->setCellPaddings(2, 1, 2, 1);

$pdf->MultiCell(25, 6, 'Owner', 'L', 'L', 0, 0, '', '', true, 0, false, true, 7, 'M', false);
$pdf->MultiCell(100, 6, $contractData['clientName'], 1, 'L', 1, 0, '', '', true, 0, false, true, 0, 'T', false);
$pdf->setCellPaddings(2, 0, 2, 0);
$pdf->MultiCell(16, 6, 'Quote Ref No.', 0, 'L', 0, 0, '', '', true, 0, false, true, 0, 'T', false);
$pdf->setCellPaddings(2, 1, 2, 1);
$pdf->MultiCell(28, 6, $contractData['quoteNumber'], 1, 'L', 1, 0, '', '', true, 0, false, true, 0, 'M', false);
$pdf->MultiCell('', 6, '', 'R', 'L', 0, 1, '', '', true, 0, false, true, 0, 'T', false);

$pdf->setCellHeightRatio(0.5);
$pdf->setCellPaddings(0, 0,0, 0);
$pdf->MultiCell('', 1, '', 'LR', 'L', 0, 1, '', '', true, 0, false, true, 0, 'T', false);
$pdf->setCellHeightRatio(1);
$pdf->setCellPaddings(2, 1, 2, 1);

$pdf->MultiCell(25, 6, 'Mob', 'L', 'L', 0, 0, '', '', true, 0, false, true, 0, 'M', false);
$pdf->MultiCell(40, 6, $contractData['clientMobile'], 1, 'L', 1, 0, '', '', true, 0, false, true, 0, 'T', false);
$pdf->MultiCell(20, 6, 'Phone', 'L', 'L', 0, 0, '', '', true, 0, false, true, 0, 'M', false);
$pdf->MultiCell(40, 6, $contractData['clientPhone'], 1, 'L', 1, 0, '', '', true, 0, false, true, 0, 'T', false);
$pdf->MultiCell('', 6, '', 'R', 'L', 0, 1, '', '', true, 0, false, true, 0, 'T', true);

$pdf->setCellHeightRatio(0.5);
$pdf->setCellPaddings(0, 0,0, 0);
$pdf->MultiCell('', 1, '', 'LR', 'L', 0, 1, '', '', true, 0, false, true, 0, 'T', false);
$pdf->setCellHeightRatio(1);
$pdf->setCellPaddings(2, 1, 2, 1);

$pdf->MultiCell(25, 6, 'Address', 'L', 'L', 0, 0, '', '', true, 0, false, true, 0, 'M', false);
$pdf->MultiCell(100, 7, $contractData['clientAddress'], 1, 'L', 1, 0, '', '', true, 0, false, true, 8, 'M', true);
$pdf->MultiCell('', 6, '', 'R', 'L', 0, 1, '', '', true, 0, false, true, 0, 'T', false);

$pdf->setCellHeightRatio(0.5);
$pdf->setCellPaddings(0, 0,0, 0);
$pdf->MultiCell('', 4, '', 'LR', 'L', 0, 1, '', '', true, 0, false, true, 0, 'T', false);
$pdf->setCellHeightRatio(1);
$pdf->setCellPaddings(2, 1, 2, 1);

$pdf->MultiCell(25, 6, 'Email', 'L', 'L', 0, 0, '', '', true, 0, false, true, 6, 'M', false);
$pdf->MultiCell(100, 6, $contractData['clientEmail'], 1, 'L', 1, 0, '', '', true, 0, false, true, 6, 'M', false);
$pdf->MultiCell('', 6, '', 'R', 'L', 0, 1, '', '', true, 0, false, true, 0, 'T', false);

$pdf->setCellPaddings(0, 0,0, 0);
$pdf->MultiCell('', 1, '', 'LBR', 'L', 0, 1, '', '', true, 0, false, true, 0, 'T', false);
$pdf->setCellPaddings(2, 1, 2, 1);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell('', 8, 'DESCRIPTION OF WORKS', 0, 'L', 0, 1, '', '', true, 0, false, true, 8, 'B', false);
$pdf->SetFont('helvetica', '', 11);

$pdf->MultiCell('', 70, $contractData['description'], 1, 'L', 1, 1, '', '', true, 0, false, true, 70, 'T', true);

$pdf->SetFont('helvetica', 'B', 10);
$pdf->MultiCell('', 8, 'PAYMENT TERMS', 0, 'L', 0, 1, '', '', true, 0, false, true, 8, 'B', false);
$pdf->SetFont('helvetica', '', 10);

$y = $pdf->GetY();
$pdf->MultiCell(65, 6, $contractData['payment1Text'], 1, 'L', 1, 0, '', '', true, 0, false, true, 6, 'M', false);
$pdf->MultiCell(30, 6, '$'.check_and_number_format($contractData['paymentTerm1']), 1, 'L', 1, 1, '', '', true, 0, false, true, 6, 'M', false);

$pdf->MultiCell(65, 6, $contractData['payment2Text'], 1, 'L', 1, 0, '', '', true, 0, false, true, 6, 'M', false);
$pdf->MultiCell(30, 6, '$'.check_and_number_format($contractData['paymentTerm2']), 1, 'L', 1, 1, '', '', true, 0, false, true, 6, 'M', false);

$pdf->MultiCell(65, 6, $contractData['payment3Text'], 1, 'L', 1, 0, '', '', true, 0, false, true, 6, 'M', false);
$pdf->MultiCell(30, 6, '$'.check_and_number_format($contractData['paymentTerm3']), 1, 'L', 1, 1, '', '', true, 0, false, true, 6, 'M', false);

$pdf->SetFillColor(255,255,255);
$pdf->MultiCell(65, 6, 'Total Price (Approximately)', 1, 'L', 1, 0, '', '', true, 0, false, true, 6, 'M', false);
$pdf->SetFillColor(255,228,181);
$pdf->MultiCell(30, 6, '$'.check_and_number_format($contractData['finalTotal']), 1, 'L', 1, 1, '', '', true, 0, false, true, 6, 'M', false);

$pdf->SetFont('helvetica', 'I', 8.5);
$paymentNotes= 'Note: By signing this contract you agree to be bound by the General Conditions of Contract on the reverse of this page and give permission to the Contractor under the Privacy Act 1988 section 18N1 (b) to give or get information about your credit arrangements from a credit provider or assess information provided by a credit reporting agency.';
$pdf->SetFillColor(255,255,255);
$pdf->MultiCell('', 24, $paymentNotes, 1, 'L', 1, 1, 113, $y, true, 0, false, true, 24, 'M', true);
$pdf->SetFont('helvetica', '', 10);

$pdf->MultiCell('', 5, '', 0, 'L', 0, 1, '', '', true, 0, false, true, 5, 'B', false);


$pdf->SetFillColor(255,255,255);
$pdf->MultiCell(55, 6, 'Approximate time to start', 1, 'L', 1, 0, '', '', true, 0, false, true, 6, 'M', false);
$pdf->MultiCell(55, 6, 'Date for practical completion', 1, 'L', 1, 1, '', '', true, 0, false, true, 6, 'M', false);

$pdf->SetFillColor(255,228,181);
$pdf->MultiCell(55, 6, $contractData['startDate'], 1, 'L', 1, 0, '', '', true, 0, false, true, 6, 'M', false);
$pdf->MultiCell(55, 6, $contractData['endDate'], 1, 'L', 1, 1, '', '', true, 0, false, true, 6, 'M', false);

$pdf->MultiCell('', 5, '', 0, 'L', 0, 1, '', '', true, 0, false, true, 5, 'B', false);

$ySignbox = $pdf->GetY();
$xSignbox = $pdf->GetX();
$ySignboxInside = $ySignbox +5;
$xSignboxInside = $xSignbox +5;

if($ySignbox>251){
    $pdf->AddPage();
    $pdf->SetAbsY(6);
    $ySignbox = $pdf->GetY();
    $xSignbox = $pdf->GetX();
    $ySignboxInside = $ySignbox +5;
    $xSignboxInside = $xSignbox +5;

}

$pdf->setCellPaddings(0, 0,0, 0);
$pdf->MultiCell('', 21, '', 1, 'L', 0, 1, '', '', true, 0, false, true, 0, 'T', false);
$pdf->setCellPaddings(2, 1, 2, 1);

$pdf->MultiCell(45, 9, $contractData['sign1'], 1, 'C', 1, 1, $xSignboxInside, $ySignboxInside, true, 0, false, true, 9, 'M', false);
$pdf->MultiCell(48, 7, 'Signed (Installation Team)', 0, 'C', 0, 1, $xSignboxInside-1, '', true, 0, false, true, 7, 'M', false);

$pdf->MultiCell(32, 9, $contractData['sign1Date'], 1, 'C', 1, 1, $xSignboxInside+48, $ySignboxInside, true, 0, false, true, 9, 'M', false);
$pdf->MultiCell(32, 7, 'Date', 0, 'C', 0, 1, $xSignboxInside+48, '', true, 0, false, true, 7, 'M', false);

$pdf->MultiCell(45, 9, $contractData['sign2'], 1, 'C', 1, 1, $xSignboxInside+83, $ySignboxInside, true, 0, false, true, 9, 'M', false);
$pdf->MultiCell(45, 7, 'Signed (Owner)', 0, 'C', 0, 1, $xSignboxInside+83, '', true, 0, false, true, 7, 'M', false);

$pdf->MultiCell(32, 9, $contractData['sign2Date'], 1, 'C', 1, 1, $xSignboxInside+131, $ySignboxInside, true, 0, false, true, 9, 'M', false);
$pdf->MultiCell(32, 7, 'Date', 0, 'C', 0, 1, $xSignboxInside+131, '', true, 0, false, true, 7, 'M', false);


$pdf->AddPage();
$pdf->SetAbsY(6);


$pdf->SetFont('helvetica', 'BU', 11);
$pdf->MultiCell('', 10, 'TERMS AND CONDITIONS', 0, 'C', 0, 1,'', '', true, 0, false, true, '', 'T', false);
$pdf->SetFont('helvetica', '', 10);

$tAndc ="<div style=\"font-size:9px;line-height: 10px\"><b style=\"font-size:10px\">1. Our main obligations:</b><br/>We will supply all the material required and complete the jobs according to specification in the time frame specified.<br/><br/><b style=\"font-size:10px\">2. Payment</b><br/>a) You must pay us the contract price by way of the progress payments specified in this contract.<br/>b) The “practical completion” payment is due when all works are completed and is ready for use in all ways relevant to the contract. “Practical completion” means that the works are complete in accordance with the agreement except for any minor omissions and/or defects.<br/>c) We may charge interest on any overdue payments at a rate of 2% p.a. higher than the rate charged by our principal bankers.<br/>d) Title of the goods does not pass until the invoice amount is paid in full.<br/><br/><b style=\"font-size:10px\">3. Access and use of facilities:</b><br/>a) You must give us uninterrupted access to the site to check measures, and to deliver and, if installation is included in this contract, to install the product.<br/>b) If we ask for access to deliver the product, and you cannot give us that access within 14 days, you must pay us the “On-Delivery” payment<br/><br/><b style=\"font-size:10px\">4. Check Measuring:</b><br/>We may check measure the places where the product is to be installed, and if necessary, modify the product to conform to the checked measurements.<br/><br/><b style=\"font-size:10px\">5. Our warranty:</b><br/>In addition to your rights under law, we warrant that our work of making and installing the product is, and the materials supplied by us are, free of defects at the time of completion of installation. We also give the statutory warranties stated in the Schedule to this agreement.<br/>However, subject to law, we do not have to fix:<br/>a) any problem caused by misuse, abuse, wear and tear or normal shrinkage or movement; or,<br/>b) any defect in, or problem caused by work, materials, or appliances supplied by you.<br/><br/><b style=\"font-size:10px\">6. Our right to fix:</b><br/>a) If at any time you claim the product or workmanship is defective, you must tell us by written notice as soon as possible.<br/>b)We are only to fix defects for which clause 5 makes us responsible.<br/>c) If we accept responsibility we have the right to fix the defect, but must do so within 40 days.<br/><br/><b style=\"font-size:10px\">7. Colour Variations:</b><br/>It is important you note that the colour and grain of timer, granite and other natural materials can vary. We will use our best efforts to match the colour and grain of the product, to any sample selected or provided by you, but we have no liability for the natural colour and grain variation of timber, granite, or other natural material.<br/><br/><b style=\"font-size:10px\">8. Surplus materials:</b><br/>Unless you and we have a different agreement of page one of this contract:a) demolished materials remain your property, and,<br/>b) materials we bring to site which are surplus remain our property.<br/><br/><b style=\"font-size:10px\">9. Subcontracting</b><br/>We may sub-contract any of our obligations.<br/>You must not give instructions to our subcontractors or workers on the site.<br/><br/><b style=\"font-size:10px\">10. Floating Installation Method</b><br/>For bamboo, laminate and floating floors, the installation method allows the floor boards to float on your subfloor, typically supported by a layer of acoustic underlay. It is common to hear a nominal amount of hollowness and feel a nominal amount of movement given that the floating floor is not 'fixed' to the subfloor. They are typical characteristics of a floating installation method. A new floor typically takes 3-5 weeks to „settle‟ and hollowness, if any, generally improves during this period. <br/><br/><b style=\"font-size:10px\">11. Delays</b><br/>We are not responsible for any delay caused by something beyond our control including any failure by you to:<br/>a) make a selection,<br/>b) have the site ready for the project,<br/>c) notify us that the site is ready for the project.<br/><br/><b style=\"font-size:10px\">12. Variations at your request:</b><br/>A “variation” means any change in the product or any extra work. If you request a variation, we will give you a written quote detailing the price and the estimate time to do it. If you sign the acceptance of the quote, we will then do the variation in the time agreed. If the price of the variation is more than 20% of the contract price then you must first pay us an agreed deposit. We can claim for a variation as soon as we have completed it.<br/><br/><b style=\"font-size:10px\">13. Hidden problems:</b><br/>We are not responsible for any problems with the site which are only revealed when installing the product</div>";

$pdf->SetAbsX(10);
$pdf->MultiCell(95, 200, $tAndc, 0, 'L', 0, 0,'', '', true, 0, true, true, 500, 'T', false);

$tAndc = "<div style=\"font-size:9px;line-height: 10px\"><b style=\"font-size:10px\">14. Retention of Title:</b><br/>Property in the product does not pass to you until it has been paid for in full, even if we have installed it. If you fail to make a due payment, we may enter the site and take reasonable action to remove the product without us being liable to you for damage to the site or the product caused by such removal.<br/><br/><b style=\"font-size:10px\">15. Installation Date:</b><br/>We require a minimum of 7 days notice to change an installation date. If we arrive on the arranged date and cannot commence or complete installation due tocircumstances out of our control, a call back fee of $120 will be automatically charged to your account, unless otherwise agreed. Additional freight/storage charges may also apply. If less than 48 hours notice is given restocking / holding fees mayapply.<br/><br/><b style=\"font-size:10px\">16. 25 Year Structural Domestic Warranty:</b><ul><li>This warranty covers hardwood timber for warping, buckling, delamination, twisting or other forms of structural deformation of any board within a residential floor as the result of a manufacturing fault or other forms of structural deformation under normal conditions provided that the product installation complies with Timber Flooring installation guidelines.Exposure to excessive moisture caused in any way whatsoever, (including flooding, wet mopping, spills, leaks, failure of seals or membranes, average daily relative humidity of above 75%) whether deliberate or accidental will void this warranty. </li><li>If hardwood timber is being installed above under-floor or sub-floor heating, the installation guidelines for such an application must be adhered to strictly. Failure to do so will void this warranty.</li></ul><br/><br/><b style=\"font-size:10px\">17. Important Features of Your Warranties</b><ul><li>All warranties are limited to the original purchaser and permanent resident; they cannot be transferred except in the case of purchase by a developer or builder of a new dwelling. A developer or builder may transfer to one owner only and this must take effect within 6 months following completion of the building works.</li><li>It is important that you follow the Timber Flooring care and maintenance instructions to care properly for your floor, as a failure to do so in part or whole will void this warranty.</li><li>As hardwood timber is a natural product, colour and texture will vary significantly according to climate, soil conditions and the age of the timber. The inherent beauty and natural variability of timber make it unlikely that hardwood flooring will match furniture, scotias and trims, or flooring manufactured from the same timber species.</li> <li>Hardwood is a natural product and will change colour as the timber ages and with exposure to sunlight. Such colour changes are normal and are not to be considered a defect.</li> <li>This warranty applies to normal residential situations only. Non residential applications such as commercial and retail sites are not covered by this warranty.</li> <li>Boards with visible faults or vastly different appearance prior to installation should not be installed.</li> <li>Damage to timber caused by heat or staining from any cause whatsoever is not covered by this warranty. Your floor should be protected from exposure to excessive heat caused by direct sunlight.</li> <li>Any area that receives replacement plank(s) must be cleared, at the consumer‟s expense, of any equipment, furnishings, partitions, etc., that have been installed or put into place over the plank(s) subsequent to the original installation.</li></ul><br/><br/><b style=\"font-size:10px\">18. Cleaning After Installation</b><br/>Our installation teams will tidy the site and clean the floor once the installation has been completed and prior to hand over, however we recommend that you arrange for your new flooring area to be professionally cleaned.<br/><br/><b style=\"font-size:10px\">19. Care and Duty</b><br/>We exercise all care, however we cannot be held responsible for any dust caused by sawing, cutting and grinding during the installation process or accidental damage to paint work, subfloor wiring cables (telephone, computer, alarm, coaxial etc.), or any under-floor pipe work.<br/><br/><b style=\"font-size:10px\">20. Your Copy of the contract</b><br/>You agree that you have received a copy of the signed contract.<br/><br/><b style=\"font-size:10px\">21. Care and Maintenance</b><br/>After your floor has been installed you may walk on it immediately. Some simple care and maintenance procedures will help prevent unnecessary wear and damage to your floor.<br/><br/>For instance, always place protective pads under furniture legs and doormats at entryways and never use abrasive brushes or ammonia based cleaners. It is also advisable to use no-slip rugs in high wear areas.</div>";
$pdf->MultiCell(95, 200, $tAndc, 0, 'L', 0, 1,'', '', true, 0, true, true, 500, 'T', false);


$dest = "I";
if(isset($_GET['download'])){
    $dest = "D";
}
if (ob_get_contents()) ob_end_clean();
//Close and output PDF document
$pdf->Output('Contract_'.$contractData['contractNumber'].'.pdf', $dest);

//============================================================+
// END OF FILE
//============================================================+
