<?php
header("content-type: text/html; charset=utf-8");

$host = "localhost";
$bd = "pqueroirpb";
$user = "root";
$pass = "";

$conexao = mysqli_connect($host,$user,$pass);

$banco = mysqli_select_db($conexao, $bd);

if(!$conexao){
    echo "Conexão com banco de dados Falhou";
}

$nome = $_POST['nome'];
$nomecompleto = $_POST['sobnome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$busca = "Select email from login";
$todos = mysqli_query($conexao, $busca);
while ($dados=mysqli_fetch_array($todos)) {
	if($dados['email'] == $email){
		echo "<h4 style='color: red;'>Email já está cadastrado.</h4> ";
    header("location:/queroir");
    exit();
	}	
}
$sql = "INSERT INTO login (senha,nome,email,usuario) VALUES 
		  ('$senha','$nome','$email','$nomecompleto')";


$insert = mysqli_query($conexao, $sql);
if(!$insert){
    echo "<h4 style='color: red;'>Ocorreu um erro ao cadastrar no banco de dados.</h4>";
    header("location:/queroir");
}else{
   echo "<h3 style='color: blue;'>Inserido com sucesso!</h3>";
   header("location:/queroir");
}
?>