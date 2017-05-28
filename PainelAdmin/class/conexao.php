<?php
header("content-type: text/html; charset=utf-8");
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "pqueroirpb";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli->connect_errno)
  echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

?>