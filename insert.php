
<?php
require 'db.php';
$play_list = $_GET['list'];
$title = $_GET['title'];
$video_url = $_GET['url'];
$duration = $_GET['duration'];

$str=mysql_query("insert into videos(play_list_id,video_title,video_url,video_duration) values('$play_list','$title','$video_url','$duration')");

if ($str) {
	$arr = array();
	$arr['list'] = $play_list;
	$arr['title'] = $title;
	$arr['url'] = $video_url;
	$arr['duration'] = $duration;
echo json_encode("Video added successfully.");
}
else{
echo json_encode("Try again.");
}

//echo "Title: ".$title." URL: ".$video_url." Duration: ".$duration." Play List: ".$play_list;
?>