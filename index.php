<?php
 if(isset($_GET['message'])) {
	$font = 'times';
	$size = 12;
	$im = imagecreatefrompng('button.png');
	$tsize = imagettfbbox($size, 0, $font, $_GET['message']);
	
	$dx = abs($tsize[2] - $tsize[0]);
	$dy = abs($tsize[5] - $tsize[3]);
	$x = (imagesx($im) - $dx) / 2;
	$y = (imagesx($im) - $dy) / 2 + $dy;
	
	$black = ImageColorAllocate($im, 0, 0, 0);
	ImageTTFText($im, $size, 0, $x, $y, $black, $font, $_GET['message']);
	
	header('Content-type: image/png');
	ImagePNG($im);
	exit;
}
?>

<html>
<head><title>Button Form</title></head>
<body>
<?php
phpinfo();

echo $_SERVER['SCRIPT_NAME'];
?>
<form action="<?=$_SERVER['PHP_SELF'] ?>" method="GET">
Enter message to appear on button:
<input type="text" name="message" /></br>
<input type="submit" value="Create Button" />
</form>
</body>
</html>