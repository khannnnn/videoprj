
<?php
require 'db.php';
$obj = $_GET['video'];

$new_obj = json_decode($obj);
if(sizeof($new_obj) != ''){
	$list = $new_obj->list;
	$title = $new_obj->title;
	$url = $new_obj->url;
	$duration = $new_obj->duration;
	$str=mysql_query("insert into videos(play_list_id,video_title,video_url,video_duration) values('$list','$title','$url','$duration')");
	echo json_encode("Video added successfully.");
}
else{
	echo json_encode("Try again.");
}

//echo "Title: ".$title." URL: ".$video_url." Duration: ".$duration." Play List: ".$play_list;
?>