<?php
if (strpos($_SERVER["SERVER_NAME"],'localhost') !== false) {
    $env = "local";
} else {
    $env = "prod";
}

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'timberland_erp';

if($env == "prod"){
    $db = 'timberdb_timberlandflooring_com_au';
    $host = 'mysql-4.netregistry.net';
    $user = 'mytimb1005';
    $password = 'mvIl7cWi';
}

$mysqli = new mysqli($host, $user, $password, $db);
/* check connection */
if ($mysqli->connect_errno) {
    echo ("DataBase Connect failed: $mysqli->connect_error");
    exit();
}
$mysqli->query("SET NAMES 'utf8'");


$quote = new Quote($mysqli);

$method = isset($_GET['method'])?$_GET['method']:'';
$data = $_POST;

switch($method){
    case "saveQuote":
        $quote->saveQuote($data);
        break;
    case "getAllQuotes":
        $quote->getAllQuotes();
        break;
    case "viewQuote":
        $quote->getQuote($_GET['quoteid']);
        break;
    case "inactiveQuote":
        $quote->inactiveQuote($_POST['quoteId']);
        break;
    case "activeQuote":
        $quote->activeQuote($_POST['quoteId']);
        break;
    case "getAllInactiveQuotes":
        $quote->getAllInactiveQuotes();
        break;
}


class Quote{

    private $mysqli;

    function __construct($mysqli){
        $this->mysqli = $mysqli;
    }


    function saveQuote($data){
        $data['quoteDate'] = date("Y-m-d", strtotime($data['quoteDate']));

        if(empty($data['quoteId'])){
            $this->createQuote($data);
        } else {
            $this->editQuote($data);
        }

    }

    function inactiveQuote($quoteId){
        $query = "UPDATE `erp_quotes` ";
        $query .= "SET active=0";
        $query .= " WHERE id = $quoteId";

        $result = $this->mysqli->query($query);
        if(!$result){
            echo json_encode(array("status"=>0,"reason"=>$this->mysqli->error));
            return;
        }
        echo json_encode(array("status"=>1));
    }

    function activeQuote($quoteId){
        $query = "UPDATE `erp_quotes` ";
        $query .= "SET active=1";
        $query .= " WHERE id = $quoteId";

        $result = $this->mysqli->query($query);
        if(!$result){
            echo json_encode(array("status"=>0,"reason"=>$this->mysqli->error));
            return;
        }
        echo json_encode(array("status"=>1));
    }

    function editQuote($data){
        $query = "UPDATE `erp_quotes` ";
        $query .= "SET quoteNumber='{$data['quoteNumber']}',quoteDate='{$data['quoteDate']}',consultant1='{$data['consultant1']}',consultant2='{$data['consultant2']}'";
        $query .= " WHERE id = {$data['quoteId']}";

        $result = $this->mysqli->query($query);
        if(!$result){
            echo json_encode(array("status"=>0,"reason"=>$this->mysqli->error));
            return;
        }

        $query = "UPDATE `erp_quote_floating` ";
        $query .= "SET finalTotal='{$data['finalTotal']}',";
        $query .= "calculatedTotal='{$data['calculatedTotal']}',";
        $query .= "clientName='{$data['clientName']}',";
        $query .= "clientAddress='{$data['clientAddress']}',";
        $query .= "clientPhone='{$data['clientPhone']}',";
        $query .= "clientEmail='{$data['clientEmail']}',";
        $query .= "timberType='{$data['timberType']}',";
        $query .= "timberSize='{$data['timberSize']}',";
        $query .= "timberPrice='{$data['timberPrice']}',";
        $query .= "timberArea='{$data['timberArea']}',";
        $query .= "timberWastage='{$data['timberWastage']}',";
        $query .= "timberTotal='{$data['timberTotal']}',";
        $query .= "underlayPrice='{$data['underlayPrice']}',";
        $query .= "underlayArea='{$data['underlayArea']}',";
        $query .= "underlayTotal='{$data['underlayTotal']}',";
        $query .= "carpetRemovalPrice='{$data['carpetRemovalPrice']}',";
        $query .= "carpetRemovalArea='{$data['carpetRemovalArea']}',";
        $query .= "carpetRemovalTotal='{$data['carpetRemovalTotal']}',";
        $query .= "furnitureRemovalPrice='{$data['furnitureRemovalPrice']}',";
        $query .= "furnitureRemovalQuantity='{$data['furnitureRemovalQuantity']}',";
        $query .= "furnitureRemovalTotal='{$data['furnitureRemovalTotal']}',";
        $query .= "floorLevelingPrice='{$data['floorLevelingPrice']}',";
        $query .= "floorLevelingArea='{$data['floorLevelingArea']}',";
        $query .= "floorLevelingTotal='{$data['floorLevelingTotal']}',";
        $query .= "installChoice='{$data['installChoice']}',";
        $query .= "skirtingChoice='{$data['skirtingChoice']}',";
        $query .= "skirtingPrice='{$data['skirtingPrice']}',";
        $query .= "skirtingLength='{$data['skirtingLength']}',";
        $query .= "skirtingTotal='{$data['skirtingTotal']}',";
        $query .= "deliveryFeeTotal='{$data['deliveryFeeTotal']}',";
        $query .= "atColor='{$data['atColor']}',";
        $query .= "atPrice='{$data['atPrice']}',";
        $query .= "atLength='{$data['atLength']}',";
        $query .= "atTotal='{$data['atTotal']}',";
        $query .= "extraItem1Name='{$data['item1Name']}',";
        $query .= "extraItem1Price='{$data['item1Price']}',";
        $query .= "extraItem1Quantity='{$data['item1Quantity']}',";
        $query .= "extraItem1Total='{$data['item1Total']}',";
        $query .= "extraItem2Name='{$data['item2Name']}',";
        $query .= "extraItem2Price='{$data['item2Price']}',";
        $query .= "extraItem2Quantity='{$data['item2Quantity']}',";
        $query .= "extraItem2Total='{$data['item2Total']}',";
        $query .= "extraItem3Name='{$data['item3Name']}',";
        $query .= "extraItem3Price='{$data['item3Price']}',";
        $query .= "extraItem3Quantity='{$data['item3Quantity']}',";
        $query .= "extraItem3Total='{$data['item3Total']}',";
        $query .= "paymentTerm1='{$data['paymentTerm1']}',";
        $query .= "paymentTerm2='{$data['paymentTerm2']}',";
        $query .= "paymentTerm3='{$data['paymentTerm3']}',";
        $query .= "notes='{$this->mysqli->real_escape_string($data['notes'])}'";
        $query .= " WHERE quoteId = {$data['quoteId']}";

        $result = $this->mysqli->query($query);
        if(!$result){
            echo json_encode(array("status"=>0,"reason"=>$this->mysqli->error));
            return;
        }
        echo json_encode(array("status"=>1));
    }

    function createQuote($data){

        $sDate = date("Y-m-d H:i:s");
        $query = "INSERT INTO `erp_quotes` ";
        $query .= "(`quoteNumber`, `quoteDate`, `consultant1`, `consultant2`, `quoteType`,`createTime`)";
        $query .= " VALUES ('{$data['quoteNumber']}', '{$data['quoteDate']}', '{$data['consultant1']}', '{$data['consultant2']}', '{$data['quoteType']}', '{$sDate}')";
        $result = $this->mysqli->query($query);
        if(!$result){
            echo json_encode(array("status"=>'0',"reason"=>$this->mysqli->error));
            return;
        }
        $quoteId = $this->mysqli->insert_id;

        $query = "INSERT INTO `erp_quote_floating` ";
        $query .= "(`quoteId`, `finalTotal`,`calculatedTotal`,
        `clientName`,`clientAddress`,`clientPhone`,`clientEmail`,
        `enableTimber`,`timberType`,`timberSize`,`timberPrice`,`timberArea`,`timberWastage`,`timberTotal`,
        `enableUnderlay`,`underlayPrice`,`underlayArea`,`underlayTotal`,
        `enableCarpetRemoval`,`carpetRemovalPrice`,`carpetRemovalArea`,`carpetRemovalTotal`,
        `enableFurnitureRemoval`,`furnitureRemovalPrice`,`furnitureRemovalQuantity`,`furnitureRemovalTotal`,
        `enableFloorLeveling`,`floorLevelingPrice`,`floorLevelingArea`,`floorLevelingTotal`,
        `enableInstall`,`installChoice`,`skirtingChoice`,`skirtingPrice`,`skirtingLength`,`skirtingTotal`,
        `enableDelivery`,`deliveryFeeTotal`,
        `enableAt`,`atColor`,`atPrice`,`atLength`,`atTotal`,
        `enableExtraItems`,
        `extraItem1Name`,`extraItem1Price`,`extraItem1Quantity`,`extraItem1Total`,
        `extraItem2Name`,`extraItem2Price`,`extraItem2Quantity`,`extraItem2Total`,
        `extraItem3Name`,`extraItem3Price`,`extraItem3Quantity`,`extraItem3Total`,
        `paymentTerm1`,`paymentTerm2`,`paymentTerm3`,
        `notes`,`createTime`)";
        $query .= " VALUES ('$quoteId','{$data['finalTotal']}','{$data['calculatedTotal']}',
        '{$data['clientName']}','{$data['clientAddress']}','{$data['clientPhone']}','{$data['clientEmail']}',
        '{$data['enableTimber']}','{$data['timberType']}','{$data['timberSize']}','{$data['timberPrice']}','{$data['timberArea']}','{$data['timberWastage']}','{$data['timberTotal']}',
        '{$data['enableUnderlay']}','{$data['underlayPrice']}','{$data['underlayArea']}','{$data['underlayTotal']}',
        '{$data['enableCarpetRemoval']}','{$data['carpetRemovalPrice']}','{$data['carpetRemovalArea']}','{$data['carpetRemovalTotal']}',
        '{$data['enableFurnitureRemoval']}','{$data['furnitureRemovalPrice']}','{$data['furnitureRemovalQuantity']}','{$data['furnitureRemovalTotal']}',
        '{$data['enableFloorLeveling']}','{$data['floorLevelingPrice']}','{$data['floorLevelingArea']}','{$data['floorLevelingTotal']}',
        '{$data['enableInstall']}','{$data['installChoice']}','{$data['skirtingChoice']}','{$data['skirtingPrice']}','{$data['skirtingLength']}','{$data['skirtingTotal']}',
        '{$data['enableDelivery']}','{$data['deliveryFeeTotal']}',
        '{$data['enableAt']}','{$data['atColor']}','{$data['atPrice']}','{$data['atLength']}','{$data['atTotal']}',
        '{$data['enableExtraItems']}',
        '{$data['item1Name']}','{$data['item1Price']}','{$data['item1Quantity']}','{$data['item1Total']}',
        '{$data['item2Name']}','{$data['item2Price']}','{$data['item2Quantity']}','{$data['item2Total']}',
        '{$data['item3Name']}','{$data['item3Price']}','{$data['item3Quantity']}','{$data['item3Total']}',
        '{$data['paymentTerm1']}','{$data['paymentTerm2']}','{$data['paymentTerm3']}',
        '{$data['notes']}', '{$sDate}')";
        $result = $this->mysqli->query($query);
        if(!$result){
            echo json_encode(array("status"=>0,"reason"=>$this->mysqli->error));
            return;
        }

        echo json_encode(array("status"=>1,"quoteId"=>$quoteId));
    }

    function getAllQuotesAsJson(){
        $query = "SELECT eq.quoteNumber,
                    eq.quoteDate,
                    eqf.clientName,
                    eq.quoteType,
                    CONCAT_WS(' ', eq.consultant1, eq.consultant2) AS consultant,
                    eqf.finalTotal
                    FROM erp_quotes eq LEFT JOIN erp_quote_floating eqf ON eq.id = eqf.quoteId
                    WHERE active = 1 ORDER BY eq.id DESC";
        $result = $this->mysqli->query($query);
        while($row = $result->fetch_array()){
            $resultArray['data'][] = $row;
        }
        echo json_encode($resultArray);
    }

    function getAllQuotes(){
        $query = "SELECT *,eq.id AS quote_id, eqf.id AS quote_floating_id, eq.createTime AS quote_createTime, eq.updateTime AS quote_updateTime, eqf.createTime AS quote_floating_createTime, eqf.updateTime AS quote_floating_updateTime
                  FROM erp_quotes eq
                  INNER JOIN erp_quote_floating eqf ON eq.id = eqf.quoteId
                  WHERE active = 1
                  ORDER BY eq.id DESC";
        $result = $this->mysqli->query($query);
        //$resultArray = $result->fetch_all(MYSQLI_ASSOC);
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $resultArray[] = $row;
        }
        return $resultArray;
    }

    function getQuote($quoteId){
        $query = "SELECT *,eq.id AS quote_id, eqf.id AS quote_floating_id, eq.createTime AS quote_createTime, eq.updateTime AS quote_updateTime, eqf.createTime AS quote_floating_createTime, eqf.updateTime AS quote_floating_updateTime  FROM erp_quotes eq INNER JOIN erp_quote_floating eqf ON eq.id = eqf.quoteId
                    WHERE eq.id = $quoteId";
        $result = $this->mysqli->query($query);

        $row = $result->fetch_array();
        return $row;
    }

    function getAllInactiveQuotes(){
        $query = "SELECT *,eq.id AS quote_id, eqf.id AS quote_floating_id, eq.createTime AS quote_createTime, eq.updateTime AS quote_updateTime, eqf.createTime AS quote_floating_createTime, eqf.updateTime AS quote_floating_updateTime
                  FROM erp_quotes eq
                  INNER JOIN erp_quote_floating eqf ON eq.id = eqf.quoteId
                  WHERE active = 0
                  ORDER BY eq.id DESC";
        $result = $this->mysqli->query($query);
        //$resultArray = $result->fetch_all(MYSQLI_ASSOC);
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $resultArray[] = $row;
        }
        return $resultArray;
    }


}