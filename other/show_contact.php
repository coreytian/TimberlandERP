<?php 
/* $host = 'localhost';
$user = 'root';
$password = '';   */
$db = 'timberdb_timberlandflooring_com_au';
$host = 'mysql-4.netregistry.net';
$user = 'mytimb1005';
$password = 'mvIl7cWi'; 
mysql_connect($host,$user,$password);
@mysql_select_db($db) or die( "Unable to select database");
$query="SELECT COUNT(*) FROM `tblf_free_quote_customer`";
$count_result = mysql_fetch_array(mysql_query($query));
$total_num = $count_result[0];
$page_size = 20;
$num_pages = ceil($total_num/$page_size);
$page_index = 1;
if(!empty($_REQUEST['page_index'])){
	$page_index = $_REQUEST['page_index'];
}
$data_start = ($page_index-1)*$page_size;
$query="SELECT * FROM `tblf_free_quote_customer` ORDER BY id DESC LIMIT $data_start, $page_size";
$results = mysql_query($query);
mysql_close();
?>
<html>
<head>
<style>
body{
	background: none repeat scroll 0 0 #fdfdfd;
	font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
	font-size: 12px;
	color: #039;
}
.head {
    float: left;
    margin-bottom: 30px;
    margin-top: 10px;
    width: 100%;
}
.first_title {
    color: #505050;
    float: left;
    font-family: Arial,Helvetica,sans-serif;
    font-size: 38px;
    font-weight: bold;
    margin-left: 25px;
    margin-top: 20px;
}
a.logo{
    background: url("/templates/timerlandflooring/images/logo.gif") no-repeat scroll left center transparent;
    display: block;
    height: 80px;
    width: 236px;
    float:right;
}
#total_num{
	margin-left:25px;
	float:left;
	width: 100%;
}
#rounded-corner
{
	font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
	margin: 10px 0 10px 25px;
	min-width: 1240px;
	text-align: left;
	border-collapse: collapse;
	float:left;
	table-layout: fixed;
	word-wrap:break-word;
	font-size: 12px;
}
#rounded-corner thead th.rounded-company
{
	background: #b9c9fe url('/images/contact/left.png') left -1px no-repeat;
}
#rounded-corner thead th.rounded-q4
{
	background: #b9c9fe url('/images/contact/right.png') right -1px no-repeat;
}
#rounded-corner th
{
	padding: 12px;
	font-weight: normal;
	font-size: 13px;
	color: #039;
	background: #b9c9fe;
}
#rounded-corner td
{
	padding: 12px;
	background: #e8edff;
	border-top: 1px solid #fff;
	color: #669;
}
#rounded-corner tr.style1 td
{
background: #e8edff;
}
#rounded-corner tfoot td.rounded-foot-left
{
	background: #e8edff url('/images/contact/botleft.png') left bottom no-repeat;
}
#rounded-corner tfoot td.rounded-foot-right
{
	background: #e8edff url('/images/contact/botright.png') right bottom no-repeat;
}
#rounded-corner tbody tr:hover td
{
	background: #d0dafd;
}
#rounded-corner tfoot a
{
	font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
	color: #039;
	padding:10px;
}
</style>
</head>
<body>
<div class="head">
<div class="first_title">Timberland Customer Database System</div>
<a class="logo" title="Timberland Flooring" href="/index.php"></a>
</div>
<div id="total_num">Total number of records: <?php echo $total_num; ?></div>
<table id="rounded-corner" >
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company">ID</th>
            <th scope="col">Date</th>
            <th scope="col">Name</th>
            <th scope="col" width="50px">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Street</th>
            <th scope="col">Suburb</th>
            <th scope="col">Postcode</th>
            <th scope="col">Estimated Area</th>
            <th scope="col">Interest</th>
            <th scope="col" width="300px">Message</th>
            <th scope="col" class="rounded-q4">IP Address</th>
        </tr>
    </thead>

<?php 
$row_index=1;
while($arr = mysql_fetch_array($results))
{
if($row_index%2==0){
	$class = 'style1';
}
else{
	$class = 'style2';
}
echo "<tr class=\"$class\">";
echo "<td>".$arr['id']."</td>";
echo "<td>".$arr['date']."</td>";
echo "<td>".$arr['name']."</td>";
echo "<td>".$arr['email']."</td>";
echo "<td>".$arr['phone']."</td>";
echo "<td>".$arr['street']."</td>";
echo "<td>".$arr['suburb']."</td>";
echo "<td>".$arr['postcode']."</td>";
echo "<td>".$arr['estimated_area']."</td>";
echo "<td>".$arr['interest']."</td>";
echo "<td>".$arr['comment']."</td>";
echo "<td>".$arr['user_ip']."</td>";
echo "</tr>";
$row_index++;
}
?>
<tfoot>
	<tr>
		<td colspan="11" class="rounded-foot-left">
<?php 
echo '<a href="?page_index=1">Top</a>';
if($page_index!=1){
echo '<a href="?page_index='.($page_index-1).'"><-Prev</a>';
}
for($i=1;$i<=$num_pages;$i++){
	if($i==$page_index){
		echo '<span style="padding:10px;color:#f00">'.$i.'</span>';
	}
	else{
		echo '<a href="?page_index='.$i.'">'.$i.'</a>';
	}
}
if($page_index!=$num_pages){
	echo '<a href="?page_index='.($page_index+1).'">Next-></a>';
}
echo '<a href="?page_index='.$num_pages.'">END</a>';
?>
		</td>
		<td class="rounded-foot-right">&nbsp;</td>
	</tr>
</tfoot>

</table>
</body>
</html>