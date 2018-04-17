<?php 
// conexão
include 'conectar.php';

// variaveis do form
$nome 		 = $_POST['video_nome'];
$url  		 = $_POST['video_url'];
$usuario_id  = 1;

// inserir no banco
$query = "INSERT INTO `new_schema`.`video_aulas` (`nome`, `url`, `usuario_id`) VALUES ('$nome', '$url', '$usuario_id')";
$insert = mysql_query($query,$connect);


// var_dump($insert);
// exit();

// manda para a pagina inicial
header('Location:/index.php');



?>