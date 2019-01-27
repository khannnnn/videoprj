<?php
require 'db.php';
$list = $_GET['list'];

$str = mysql_query("select play_list_id from videos where play_list_id='$list'");
$row = mysql_fetch_array($str);
$list = $row['play_list_id'];

if ($list != '') {
  $str = mysql_query("delete from videos where play_list_id='$list'");
echo json_encode("List deleted successfully.");
}
else{
  echo json_encode("Video is not exits.");
}
?>