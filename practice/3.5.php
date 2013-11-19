<?php
	echo "<h1>multi-dimensional array practice</h1><br />";

	echo "<h2>Practice 1</h2><br />";
	$products1 = array(	
		array( 'TIR', 'Tires', 100),
		array( 'OIL', 'Oil', 10),
		array( 'SPK', 'Spark Plugs', 4)
	);

	for($row = 0; $row < 3; $row++) {
		for($column = 0; $column < 3; $column++) {
			echo '|' .$products1[$row][$column];
		}
		echo '<br />';
	}

	echo "<h2>Practice 2</h2><br />";
	$products2 = array(
		array(
			'Code' => 'TIR',
			'Description' => 'Tires',
			'Price' => 100
		),
		array(
			'Code' => 'OIL',
			'Description' => 'Oil',
			'Price' => 10
		),
		array(
			'Code' => 'SPK',
			'Description' => 'Spark Plugs',
			'Price' => 4
		)
	);
	for($row = 0; $row < 3; $row++){
		echo '|' .$products2[$row]['Code'] .'|' .$products2[$row]['Description'] .'|' .$products2[$row]['Price'] .'|' .'<br />';
	}

	echo '<br />';

	echo "<h2>Practice 2 using while</h2><br />";
	for($row = 0; $row < 3; $row++){
		while(list($key, $value) = each($products2[$row])){
			echo "|$value";
		}
		echo '|<br />';
	}

	echo '<br />';
	echo "<h2>Practice 3</h2><br />";
	
	$categories = array(
		array(	
			array('CAR_TIR', 'Tires', 100),
			array('CAR_OIL', 'Oil', 10),
			array('CAR_SPK', 'Spark Plugs', 4)
		),
		array(	
			array('VAN_TIR', 'Tires', 120),
			array('VAN_OIL', 'Oil', 12),
			array('VAN_SPK', 'Spark Plugs', 5)
		),
		array(	
			array('TRK_TIR', 'Tires', 150),
			array('TRK_OIL', 'Oil', 15),
			array('TRK_SPK', 'Spark Plugs', 6)
		)
	);
	
	for($layer = 0; $layer < 3; $layer++){
		echo 'Layer ' .$layer .'<br />';
		for($row = 0; $row < 3; $row++){
			for($column = 0; $column < 3; $column++){
				echo '|' .$categories[$layer][$row][$column];
			}
			echo '<br />';
		}
	}
?>