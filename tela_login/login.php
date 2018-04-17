<?php 
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);

  // var_dump($entrar);
  // exit();

    
  $connect = mysql_connect('localhost','root','root');
  $db = mysql_select_db('new_schema');
    if (isset($entrar)) {

     // $query2 = "SELECT * FROM usuarios WHERE usuario = '$login' AND senha = '$senha'";
        // var_dump($query2);
    // exit();
      $verifica = mysql_query("SELECT * FROM usuarios WHERE usuario = '$login' AND senha = '$senha'") or die("erro ao selecionar");



        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:index.php");
        }
    }
?>