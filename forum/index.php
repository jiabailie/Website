<?php
require("header.php");

$catsql = "select * from categories;";
$catresult = mysql_query($catsql);

echo "<table cellspacing='0'>";

while($catrow = mysql_fetch_assoc($catresult)) {
	echo "<tr class='head'><td colspan='2'>";
	echo "<strong>" .$catrow['name'] ."</strong></td>";
	echo "</tr>";
	
	$forumsql = "select * from forums where cat_id=" .$catrow['id'] .";";
	$forumresult = mysql_query($forumsql);
	$forumnumrows = mysql_num_rows($forumresult);
	if($forumnumrows == 0) {
		echo "<tr><td>No forums!</td></tr>";
	} else {
		while($forumrow = mysql_fetch_assoc($forumresult)) {
			echo "<tr>";
			echo "<td>";
			echo "<strong><a href='viewforum.php?id=" .$forumrow['id'] ."'>" .$forumrow['name'] ."</a></strong>";
			echo "<br /><i>" .$forumrow['description'] ."</i>";
			echo "</td>";
			echo "</tr>";
		}
	}
}

echo "</table>";
require("footer.php");
?>