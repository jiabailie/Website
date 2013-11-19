<?php
$products = array('Tires', 'Oil', 'Spark Plugs');
$numbers = range(1, 10);
$odds = range(1, 10, 2);
$letters = range('a', 'z');

// print $products
for($i = 0; $i < 3; $i++) {
	echo $products[$i] ." ";
}
echo "<br />";

// print $numbers
foreach($numbers as $int) {
	echo $int ." ";
}
echo "<br />";

// print $letters
foreach($letters as $c) {
	echo $c ." ";
}
echo "<br />";

// add one element to $products and print it out
$products[3] = 'Fuses';
foreach($products as $product) {
	echo $product ." ";
}
echo "<br />";

// initialize a key-value array and print it out
$prices = array('Tires'=>100, 'Oil'=>10, 'Spark Plugs'=>4);
foreach($prices as $key => $value) {
	echo $key ." 1-1 " .$value ."<br />";
}

// use each to visit the key-value array
while($element = each($prices)) {
	echo $element['key'];
	echo " 2-2 ";
	echo $element['value'];
	echo "<br />";
}

while(list($product, $price) = each($prices)) {
	echo "$product 3-3 $price<br />";
}
?>