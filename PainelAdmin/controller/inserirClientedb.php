<?php
header("content-type: text/html; charset=utf-8");
require_once("class/protect.php");
$nome = $_POST['nome'];
$nomecompleto = $_POST['nomecompleto'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$tipo = $_POST['tipo'];

$busca = "Select email from login";
$todos = mysqli_query($conexao, $busca);
while ($dados=mysqli_fetch_array($todos)) {
	if($dados['email'] == $email){
		 echo "<h4 style='color: red;'>Email já está cadastrado.</h4> 
    		<a href='?pg=controller/inserirCliente'>Tente Novamente</a>";
    	exit();
	}	
}
$sql = "INSERT INTO login (senha,tipo, nome, email,usuario) VALUES 
		('$senha','$tipo','$nome','$email','$nomecompleto')";
$insert = mysqli_query($conexao, $sql);
if(!$insert){
    echo "<h4 style='color: red;'>Ocorreu um erro ao cadastrar no banco de dados.</h4> 
    <a href='?pg=controller/inserirCliente'>Tente Novamente</a>";
}else{
   echo "<h3 style='color: blue;'>Inserido com sucesso!</h3>";
   header("location:?pg=controller/inserirCliente");
}
?>