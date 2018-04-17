<?php 
include 'retornar_videos.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Listar video aulas</title>
</head>
<body>
	<h1>Meus videos</h1>
<!-- 	<h2>Conjuntos</h2>
	​<iframe width="560" height="315" src="https://www.youtube.com/embed/cwF61UXQcK4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
 -->
<?php 
while ($row = mysql_fetch_object($select)) {
	echo '<h2>'.$row->nome.'</h2>';
    echo '<iframe width="560" height="315" src='.$row->url.' frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>';
}






?>

</body>
</html>