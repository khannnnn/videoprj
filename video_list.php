<?php
require 'db.php';
$arr = array(
	array('list'=>'6','title'=>'SIMMBA: Aankh Marey Lyrical','url'=>'https://www.youtube.com/watch?v=vu5-aKf_QqA','duration'=>'40 Sc'),
	array('list'=>'6','title'=>'Laung Laachi Title Song','url'=>'https://www.youtube.com/watch?v=YpkJO_GrCo0','duration'=>'45 Sc'),
	array('list'=>'6','title'=>'3 Peg Sharry Mann Lyric Video','url'=>'https://www.youtube.com/watch?v=LYnHyygU7xE','duration'=>'25 Sc')
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