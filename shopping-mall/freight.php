<?php
define("MAX_LOOP", 5);
function forGenerator(){
	for($i = 1; $i <= MAX_LOOP; $i++){
		echo "<tr>";
		echo "<td align='right'>" .($i * 50) ."</td>";
		echo "<td align='right'>" .($i * 5) ."</td>";
		echo "</tr>";
	}
}
function wileGenerator(){
	$i = 1;
	while($i <= MAX_LOOP){
		echo "<tr>";
		echo "<td align='right'>" .($i * 50) ."</td>";
		echo "<td align='right'>" .($i * 5) ."</td>";
		echo "</tr>";	
		$i++;	
	}
}

?>
<html>
	<body>
		<table border="0" cellpadding="3">
			<tr>
				<td bgcolor="#aaaaaa" align="center">Distance</td>
				<td bgcolor="#aaaaaa" align="center">Cost</td>
			</tr>
			<?php
				wileGenerator();
			?>
<!--
			<tr>
				<td align="right">50</td>
				<td align="right">5</td>
			</tr>
			<tr>
				<td align="right">100</td>
				<td align="right">10</td>
			</tr>
			<tr>
				<td align="right">150</td>
				<td align="right">15</td>
			</tr>
			<tr>
				<td align="right">200</td>
				<td align="right">20</td>
			</tr>			
			<tr>
				<td align="right">250</td>
				<td align="right">25</td>
			</tr>
-->
		</table>
	</body>
</html>