<?php
if (get_magic_quotes_gpc()) {
    $process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
    while (list($key, $val) = each($process)) {
        foreach ($val as $k => $v) {
            unset($process[$key][$k]);
            if (is_array($v)) {
                $process[$key][stripslashes($k)] = $v;
                $process[] = &$process[$key][stripslashes($k)];
            } else {
                $process[$key][stripslashes($k)] = stripslashes($v);
            }
        }
    }
    unset($process);
}

$quoteData = json_decode($_POST['data'],true);
function check_and_number_format($value){
    $value = trim($value);
    if(is_numeric($value)){
        return number_format($value, 2);
    }
    return '';
}
?>

<div class="viewContainer panel panel-default">
    <?php include("viewQuote.php"); ?>
</div><!-- panel -->