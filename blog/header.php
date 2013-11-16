<?php
session_start();
require("config.php");
$db = mysql_connect($dbhost, $dbuser, $dbpassword);
mysql_select_db($dbdatabase, $db);
?>

<html>
<head>
<title><?php echo $config_blogname; ?></title>
<link rel="stylesheet" href="stylesheet.css" type="text/css" />
</head>
<body>
<div id="header">
<h1><?php echo $config_blogname; ?></h1>
[<a href="index.php">home</a>]&nbsp;&nbsp;
[<a href="viewcat.php">categories</a>]

<?php
if(isset($_SESSION['username'])) {
	echo "&nbsp;&nbsp;[<a href='logout.php'>logout</a>]";
} else {
	echo "&nbsp;&nbsp;[<a href='login.php'>login</a>]";
}

if(isset($_SESSION['username'])) {
	echo " - ";
	echo "[<a href='addentry.php'>add entry</a>]";
	echo "&nbsp;&nbsp;[<a href='addcat.php'>add category</a>]";
}
?>

</div>
<div id="main" style="text-align: left;">