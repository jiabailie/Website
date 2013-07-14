<?php
if(!isset($_SESSION)){
	session_start();
}
require("config.php");

$db = mysql_connect($dbhost, $dbuser, $dbpassword);
mysql_select_db($dbdatabase, $db);
?>

<html>
<head>
	<title><?php echo $config_forumsname; ?></title>
	<link rel="stylesheet" href="stylesheet.css" type="text/css" />
</head>
<body>
	<div id="header">
		<h1><?php echo $config_forumsname; ?></h1>
		[<a href="index.php">Home</a>]
		<?php
		if(isset($_SESSION['username'])) {
			echo "[<a href='logout.php'>Logout</a>]";
		} else {
			echo "[<a href='login.php'>Login</a>]";
			echo "[<a href='register.php'>Register</a>]";
		}
		?>[<a href="newtopic.php">New Topic</a>]
	</div>
	<div id="main">