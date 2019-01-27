<?php
require 'db.php';
$obj = $_GET['list'];

$new_obj = json_decode($obj);
if(sizeof($new_obj) != ''){
  foreach ($new_obj as $key) {
	$list = $key->list;
	$title = $key->title;
	$url = $key->url;
	$duration = $key->duration;

	$str=mysql_query("insert into videos(play_list_id,video_title,video_url,video_duration) values('$list','$title','$url','$duration')");
	//echo "Title: ".$title."<br> List: ".$list."<br> URL: ".$url."<br>Duration: ".$duration."<br>";
  }
  echo json_encode("List added successfully.");
}
else{
	echo json_encode("List is empty.");
}
?>