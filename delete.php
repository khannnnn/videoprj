<?php
require 'db.php';

$id = $_GET['id'];
$str = mysql_query("select id from videos where id='$id'");
$row = mysql_fetch_array($str);
$id = $row['id'];

if ($id != '') {
  $str = mysql_query("delete from videos where id='$id'");
  echo json_encode("Video deleted successfully.");
}
else{
  echo json_encode("Video is not exits.");
}
?>