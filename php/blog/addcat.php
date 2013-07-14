<?php
session_start();
require("config.php");
$db = mysql_connect($dbhost, $dbuser, $dbpassword);
mysql_select_db($dbdatabase, $db);

if(!isset($_SESSION['username'])) {
	header("Location: " .$config_basedir);
}

if(isset($_POST['submit'])) {
	if($_POST['submit']) {
		$sql = "insert into categories (cat) values ('" .$_POST['cat'] ."');";
		mysql_query($sql);
		header("Location: " .$config_basedir ."viewcat.php");
	} 
} else {
	require("header.php");
?>

<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="post">
<table>
	<tr>
		<td>Category</td>
		<td><input type="text" name="cat"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="submit" value="Add Entry!"></td>
	</tr>
</table>
</form>
<?php 
}
require("footer.php");
?>