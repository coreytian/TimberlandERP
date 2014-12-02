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


$contract = new Contract($mysqli);

$method = isset($_GET['method'])?$_GET['method']:'';
$data = $_POST;

switch($method){
    case "saveContract":
        $contract->saveContract($data);
        break;
    case "getAllContracts":
        $contract->getAllContracts();
        break;
    case "viewContract":
        $contract->getContract($_GET['contractId']);
        break;
    case "inactiveContract":
        $contract->inactiveContract($_POST['contractId']);
        break;
    case "activeContract":
        $contract->activeContract($_POST['contractId']);
        break;
    case "getAllInactiveContracts":
        $contract->getAllInactiveContracts();
        break;
}
 Class Contract{
     private $mysqli;

     function __construct($mysqli){
         $this->mysqli = $mysqli;
     }


     function saveContract($data){
         //$data['contractDate'] = date("Y-m-d", strtotime($data['contractDate']));
         foreach($data as &$element){
             $element = $this->mysqli->real_escape_string($element);
         }
         if(empty($data['id'])){
             $this->createContract($data);
         } else {
             $this->editContract($data);
         }
     }

     function getAllContracts(){
         $query = "SELECT *
                  FROM erp_contracts
                  WHERE active = 1
                  ORDER BY id DESC";
         $result = $this->mysqli->query($query);

         while($row = $result->fetch_array(MYSQLI_ASSOC)){
             $resultArray[] = $row;
         }
         return $resultArray;
     }

     function getContract($contractId){
         $query = "SELECT *
                   FROM `erp_contracts`
                   WHERE id = $contractId";
         $result = $this->mysqli->query($query);
         $row = $result->fetch_array();
         if($row['sign1Date']=='0000-00-00'){
             $row['sign1Date'] = '';
         }
         if($row['sign2Date']=='0000-00-00'){
             $row['sign2Date'] = '';
         }
         return $row;
     }

     function createContract($data){
         $sign1Date = $this->convertMySQLDate($data['sign1Date']);
         $sign2Date = $this->convertMySQLDate($data['sign2Date']);

         $sDate = date("Y-m-d H:i:s");
         $query = "INSERT INTO `erp_contracts` ";
         $query .= "(`contractNumber`, `quoteId`, `quoteNumber`,
         `contractor`, `contractorAddress`,`contractorPhone`,
         `clientName`,`clientMobile`,`clientPhone`,`clientAddress`,`clientEmail`,
         `description`,`finalTotal`,`payment1Text`,`payment2Text`,`payment3Text`,`paymentTerm1`,`paymentTerm2`,`paymentTerm3`,
         `startDate`,`endDate`,`sign1`,`sign2`,`sign1Date`,`sign2Date`,`createTime`)";
         $query .= " VALUES ('{$data['contractNumber']}', '{$data['quoteId']}', '{$data['quoteNumber']}',
         '{$data['contractor']}', '{$data['contractorAddress']}',  '{$data['contractorPhone']}',
         '{$data['clientName']}', '{$data['clientMobile']}', '{$data['clientPhone']}', '{$data['clientAddress']}', '{$data['clientEmail']}',
         '{$data['description']}', '{$data['finalTotal']}', '{$data['payment1Text']}', '{$data['payment2Text']}', '{$data['payment3Text']}', '{$data['paymentTerm1']}', '{$data['paymentTerm2']}', '{$data['paymentTerm3']}',
         '{$data['startDate']}', '{$data['endDate']}', '{$data['sign1']}', '{$data['sign2']}','{$sign1Date}','{$sign2Date}','{$sDate}')";

         $result = $this->mysqli->query($query);
         if(!$result){
             echo json_encode(array("status"=>'0',"reason"=>$this->mysqli->error));
             return;
         }
         $contractId = $this->mysqli->insert_id;

         echo json_encode(array("status"=>1,"contractId"=>$contractId));
     }

     function editContract($data){
         $sign1Date = $this->convertMySQLDate($data['sign1Date']);
         $sign2Date = $this->convertMySQLDate($data['sign2Date']);

         $query = "UPDATE `erp_contracts` ";
         $query .= "SET contractNumber='{$data['contractNumber']}',";
         $query .= "quoteNumber='{$data['quoteNumber']}',";
         $query .= "contractor='{$data['contractor']}',";
         $query .= "contractorAddress='{$data['contractorAddress']}',";
         $query .= "contractorPhone='{$data['contractorPhone']}',";
         $query .= "clientName='{$data['clientName']}',";
         $query .= "clientMobile='{$data['clientMobile']}',";
         $query .= "clientPhone='{$data['clientPhone']}',";
         $query .= "clientAddress='{$data['clientAddress']}',";
         $query .= "clientEmail='{$data['clientEmail']}',";
         $query .= "description='{$data['description']}',";
         $query .= "finalTotal='{$data['finalTotal']}',";
         $query .= "payment1Text='{$data['payment1Text']}',";
         $query .= "payment2Text='{$data['payment2Text']}',";
         $query .= "payment3Text='{$data['payment3Text']}',";
         $query .= "paymentTerm1='{$data['paymentTerm1']}',";
         $query .= "paymentTerm2='{$data['paymentTerm2']}',";
         $query .= "paymentTerm3='{$data['paymentTerm3']}',";
         $query .= "startDate='{$data['startDate']}',";
         $query .= "endDate='{$data['endDate']}',";
         $query .= "sign1Date='{$sign1Date}',";
         $query .= "sign2Date='{$sign2Date}',";
         $query .= "sign1='{$data['sign1']}',";
         $query .= "sign2='{$data['sign2']}'";

         $query .= " WHERE id = {$data['id']}";

         $result = $this->mysqli->query($query);
         if(!$result){
             echo json_encode(array("status"=>0,"reason"=>$this->mysqli->error));
             return;
         }
         echo json_encode(array("status"=>1));
     }

     function inactiveContract($contractId){
         $query = "UPDATE `erp_contracts` ";
         $query .= "SET active=0";
         $query .= " WHERE id = $contractId";

         $result = $this->mysqli->query($query);
         if(!$result){
             echo json_encode(array("status"=>0,"reason"=>$this->mysqli->error));
             return;
         }
         echo json_encode(array("status"=>1));
     }

     function activeContract($contractId){
         $query = "UPDATE `erp_contracts` ";
         $query .= "SET active=1";
         $query .= " WHERE id = $contractId";

         $result = $this->mysqli->query($query);
         if(!$result){
             echo json_encode(array("status"=>0,"reason"=>$this->mysqli->error));
             return;
         }
         echo json_encode(array("status"=>1));
     }

     function getAllInactiveContracts(){
         $query = "SELECT * FROM erp_contracts
                  WHERE active = 0
                  ORDER BY id DESC";
         $result = $this->mysqli->query($query);
         //$resultArray = $result->fetch_all(MYSQLI_ASSOC);
         while($row = $result->fetch_array(MYSQLI_ASSOC)){
             $resultArray[] = $row;
         }
         return $resultArray;
     }

     /**
      * @param $string
      * @return bool|int|string
      *
      * Covert PHP date string to MySQL date format Y-m-d that can be saved
      * if not successful will return false
      *
      */
     function convertMySQLDate($string){
         if(empty($string)){
             return false;
         }
         $string = str_replace('/', '-', $string);
         $date = strtotime($string);
         if($date){
             $date = date('Y-m-d', $date);
         }
         if(!$date){
             $date = false;
         }
         return $date;
     }

 }