<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Config/bootstrap/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="Config/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="Config/css/config.css">
    
	<title>Quero ir</title>
</head>
<body>
	<?php
        include_once("Config/menup.php"); 
        if(empty($_SERVER["QUERY_STRING"])){
            $var = "Config/PageInicial.php";
            include_once("$var");
        }else{
            $pg = $_GET['pg'];
            include_once("$pg.php");
        }
        include_once("Config/footer.php");
	?>
    <script src="Config/bootstrap/js/jquery.js"></script>
    <script src="Config/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
