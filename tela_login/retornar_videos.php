<?php 
include 'conectar.php';
$query_select = "SELECT * FROM video_aulas WHERE usuario_id = '1'";
$select = mysql_query($query_select,$connect);
// $array = mysql_fetch_array($select);

 ?>