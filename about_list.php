<?php
require 'db.php';
$list = $_GET['list'];

$arr = array();
$str = mysql_query("select * from videos where play_list_id='$list'");
$count = mysql_num_rows($str);
if ($count != 0) {
	for($i=1; $i<=$count; $i++){
	$row = mysql_fetch_array($str);
	$arr[] = array(
		'id' => $row['id'],
		'list' => $row['play_list_id'],
	'title' => $row['video_title'],
	'url' => $row['video_url'],
	'duration' => $row['video_duration'],
	);  	
}
echo json_encode($arr);
}
else{
	echo json_encode("List is not exits.");
}
?>