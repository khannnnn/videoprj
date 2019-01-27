<?php
require 'db.php';
$arr = array(
	array('list'=>'6','title'=>'second','url'=>'video.mp4','duration'=>'40 Sc'),
	array('list'=>'6','title'=>'third','url'=>'video.mp3','duration'=>'45 Sc'),
	array('list'=>'6','title'=>'fourth','url'=>'video.mp5','duration'=>'25 Sc')
);

$url ='http://localhost/video/insert_list.php?list='.urlencode( json_encode($arr));
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result);
print_r($result);
?>