<?php
$a = 56;
echo gettype($a) ."<br />";
settype($a, 'double');
echo gettype($a) ."<br />";
?>
<?php
echo "-------------------------<br />";
$tireqty = 10;
echo 'isset($tireqty):' .isset($tireqty) ."<br />";
echo 'isset($nothere):' .isset($nothere) ."<br />";
echo 'empty($tireqty):' .empty($tireqty) ."<br />";
echo 'empty($nothere):' .empty($nothere) ."<br />";

$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
//@ $fp = fopen("$DOCUMENT_ROOT/../data/orders.txt", "ab");
//echo `ls -la`;
echo $DOCUMENT_ROOT;
@ $fp = fopen($DOCUMENT_ROOT ."/shopping-mall/text.txt", "ab");
if(!$fp){
	echo "<p><strong>Your order could not be processed at this time. Please try again later.</strong></p>";
	exit;
} else {
	echo "<p>Yes, the file exist.</p>";
	fwrite($fp, "I hope I can have a girl.\n");
}
?>
