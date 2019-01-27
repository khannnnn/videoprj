<?php
$title = 'First';
$video_url = 'video.mp3';
$list = 3;
$duration = '45Sc';

$url ='http://localhost/video/insert.php?title='.$title.'&url='.$video_url.'&list='.$list.'&duration='.$duration;
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result);
print_r($result);
?>