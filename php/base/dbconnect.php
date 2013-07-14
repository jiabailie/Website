<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "123";
$dbdatabase = "test";

$db = mysql_connect($dbhost, $dbuser, $dbpassword);
mysql_select_db($dbdatabase, $db);

$sql = "select * from products";
$result = mysql_query($sql);

while($row = mysql_fetch_assoc($result)) {
	echo $row['product'];
}
?>