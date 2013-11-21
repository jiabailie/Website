<?php
	
	function printOneDimensionArray($array){
		foreach($array as $elem) {
			echo $elem .'<br />';
		}
	}

	function printTwoDimensionArray($array) {
		foreach($array as $key => $value){
			echo $key .'=>' .$value .'<br />';
		}
	}

	function printTitles($format, $content) {
		echo '<' .$format .'>' .$content .'</' .$format .'>';
	}

	printTitles('h1', 'Array sort function practice');

	// sort()
	printTitles('h2', 'Practice sort()');
	echo "Use sort: A < Z < a < z<br />";
	echo "sort( array, [SORT_REGULAR | SORT_NUMERIC | SORT_STRING] )<br />";

	printTitles('h3', 'Practice 1');
	$products = array('Tires', 'Oil', 'Spark Plugs');
	sort($products);
	printOneDimensionArray($products);

	printTitles('h3', 'Practice 2');
	$prices = array(100, 10, 4);
	sort($prices, SORT_STRING);
	printOneDimensionArray($prices);

	// asort() & ksort()
	$prices = array( 'Tires' => 100, 'Oil' => 10, 'Spark Plugs' => 4);

	printTitles('h2', 'Practice asort()');	
	asort($prices);
	printTwoDimensionArray($prices);

	printTitles('h2', 'Practice ksort()');
	ksort($prices);
	printTwoDimensionArray($prices);

	// rsort() & arsort() & krsort()
	printTitles('h2', 'Practice rsort(), arsort(), krsort()');

	printTitles('h3', 'Practice rsort()');
	rsort($products);
	printOneDimensionArray($products);

	printTitles('h3', 'Practice arsort()');
	arsort($prices);
	printTwoDimensionArray($prices);

	printTitles('h3', 'Practice krsort()');
	krsort($prices);
	printTwoDimensionArray($prices);

?>