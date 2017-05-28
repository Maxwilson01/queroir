<?php
header("content-type: text/html; charset=utf-8");
require_once("class/protect.php");
$host = "localhost";
$bd = "pqueroirpb";
$user = "root";
$pass = "";

$conexao = mysqli_connect($host,$user,$pass);

$banco = mysqli_select_db($conexao, $bd);
//mysqli_set_charset('utf8');
if(!$conexao){
    echo "Conexão com banco de dados Falhou";
}
?>