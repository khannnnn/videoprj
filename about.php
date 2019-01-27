<?php
require 'db.php';
$id = $_GET['id'];

$str = mysql_query("select * from videos where id='$id'");
$row = mysql_fetch_array($str);
$arr = array();
$id = $row['id'];
if ($id != '') {
	$arr['id'] = $id;
	$arr['list'] = $row['play_list_id'];
	$arr['title'] = $row['video_title'];
	$arr['url'] = $row['video_url'];
	$arr['duration'] = $row['video_duration'];
	echo json_encode($arr);
}
else{
	echo json_encode("Video id not exits.");
}
?>