<?php
$data = $_REQUEST;

// multiple recipients
$to  = 'info@timberlandflooring.com.au'; // note the comma
//$to  .= ',haohetian@gmail.com,'; // note the comma
// subject
$subject = 'Timberland Flooring '.$data['email'];


//    <tr>
//      <td>Address</td><td>{$data['street']}</td>
//    </tr>
// message
$message = "
    <html>
<body>
  <h4>Timberland Flooring Free Quote</h4>
  <table>
    <tr>
      <td>Name</td><td>{$data['name']}</td>
    </tr>
    <tr>
      <td>Suburb</td><td>{$data['suburb']}</td>
    </tr>
    <tr>
      <td>Postcode</td><td>{$data['postcode']}</td>
    </tr>    
    <tr>
      <td>Email</td><td>{$data['email']}</td>
    </tr>
    <tr>
      <td>Phone No</td><td>{$data['phone']}</td>
    </tr>
    <tr>
      <td>Estimated total area (sqm)</td><td>{$data['estimate_area']}</td>
    </tr>
    <tr>
      <td>I am interested in </td><td>{$data['subject']}</td>
    </tr>
    <tr>
      <td>Other information</td><td>{$data['comment']}</td>
    </tr>
  </table>
</body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= "From: {$data['name']} <{$data['email']}>" . "\r\n";
// Mail it
mail($to, $subject, $message, $headers);
//echo $message;

$ip_address = $_SERVER["REMOTE_ADDR"];

/* $host = 'localhost';
$user = 'root';
$password = ''; */
$db = 'timberdb_timberlandflooring_com_au';
$host = 'mysql-4.netregistry.net';
$user = 'mytimb1005';
$password = 'mvIl7cWi';
mysql_connect($host,$user,$password);
@mysql_select_db($db) or die( "Unable to select database");
$query="INSERT INTO `tblf_free_quote_customer` (`name`, `email`, `phone`, `street`, `suburb`, `postcode`, `estimated_area`, `interest`, `comment`, `user_ip`) VALUES ('{$data['name']}', '{$data['email']}', '{$data['phone']}', '{$data['street']}', '{$data['suburb']}', '{$data['postcode']}', '{$data['estimate_area']}', '{$data['subject']}', '{$data['comment']}', '{$ip_address}');";
$result = mysql_query($query);
mysql_close();

?>