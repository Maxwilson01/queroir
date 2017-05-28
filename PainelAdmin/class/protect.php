<?php
header("content-type: text/html; charset=utf-8");
if(!function_exists("protect")){
	session_start();
  function protect(){

    if(!isset($_SESSION['user_logado'])){
      
      //exit();
      echo "<script>location.href='login.php';</script>";
      exit('Login inválido: Redirecionando...');
    }

  }

}

protect();
?>