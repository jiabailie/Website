<?php
require("header.php");
$verifystring = "";
$verifyemail = "";

if(isset($_GET['verify']) && isset($_GET['email'])) {
	$verifystring = urldecode($_GET['verify']);
	$verifyemail = urldecode($_GET['email']);
}
$sql = "select id from users where verifystring = '" .$verifystring ."' and email = '" .$verifyemail ."';";

$result = mysql_query($sql);
$numrows = mysql_num_rows($result);

if($numrows == 1) {
	$row = mysql_fetch_assoc($result);
	$sql = "update users set active = 1 where id = " .$row['id'] .";";
	$result = mysql_query($sql);
	
	echo "Your account has now been verified. You can now <a href='login.php'>log in</a>";
} else {
	echo "This account could not be verified.";
}
require("footer.php");
?>