<?php
header("content-type: text/html; charset=utf-8");
require_once("class/protect.php");
$id = $_POST['id'];
$nome = $_POST['nome'];
$nomecompleto = $_POST['nomecompleto'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];

$sql2 = mysqli_query($conexao, "SELECT * FROM login WHERE idUser='$id'");

$sql = "UPDATE login SET senha='$senha', tipo='$tipo',nome='$nome', email='$email', usuario='$nomecompleto' WHERE idUser=$id";

$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=controller/listarCliente'>Voltar</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>
<a href='?pg=controller/listarCliente'>Voltar</a>";
}
?>