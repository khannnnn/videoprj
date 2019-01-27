<?php
$arr = array();
$title = 'Cute Munda - Sharry Mann (Full Video Song)';
$video_url = 'https://www.youtube.com/watch?v=PDlw1Tn-PVk';
$list = 3;
$duration = '45Sc';

$arr['title'] = $title;
$arr['url'] = $video_url;
$arr['list'] = $list;
$arr['duration'] = $duration;


$url ='http://localhost/video/insert.php?video='.urlencode( json_encode($arr));
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result);
print_r($result);
?>