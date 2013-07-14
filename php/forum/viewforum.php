<?php
include ("config.php");
$validforum = 0;

if(isset($_GET['id'])) {
	if(!is_numeric($_GET['id'])) {
		header("Location: " .$config_basedir);
	}
	$validforum = $_GET['id'];
} else {
	header("Location: " .$config_basedir);
}

require("header.php");

$forumsql = "select * from forums where id=" .$validforum .";";
$forumresult = mysql_query($forumsql);
$forumrow = mysql_fetch_assoc($forumresult);

echo "<h2>" .$forumrow['name'] ."</h2>";
echo "<a href='index.php'>" .$config_forumsname ." forums</a><br /><br />";
echo "[<a href='newtopic.php?id=" .$validforum ."'>New Topic</a>]<br /><br />";

$topicsql = "select max(messages.date) as maxdate, topics.id as topicid, topics.*, users.* from messages, topics, users " 
."where messages.topic_id = topics.id and topics.user_id = users.id "	
."and topics.forum_id = " .$validforum ." group by messages.topic_id order by maxdate desc;";

$topicresult = mysql_query($topicsql);
$topicnumrows = mysql_num_rows($topicresult);

echo "<div>";
if($topicnumrows == 0) {
	echo "<table width='300px'><tr><td>No topics!</td></tr></table>";
} else {
	echo "<table class='forum'>";
	echo "<tr>";
	echo "<th>Topic</th>";
	echo "<th>Replies</th>";
	echo "<th>Author</th>";
	echo "<th>Date Posted</th>";
	echo "</tr>";
	
	while($topicrow = mysql_fetch_assoc($topicresult)) {
		$msgsql = "select id from messages where topic_id=" .$topicrow['topicid'] .";";
		$msgresult = mysql_query($msgsql);
		$msgnumrows = mysql_num_rows($msgresult);

		echo "<tr>";
		echo "<td>";
		echo "<strong><a href='viewmessages.php?id=" .$topicrow['topicid'] ."'>" .$topicrow['subject'] ."</a></strong></td>";
		echo "<td>" .$msgnumrows ."</td>";
		echo "<td>" .$topicrow['username'] ."</td>";
		echo "<td>" .date("D jS F Y g.iA", strtotime($topicrow['date'])) ."</td>";
		echo "<tr>";
	}
	echo "</table>";
}
echo "</div>";

require("footer.php");
?>