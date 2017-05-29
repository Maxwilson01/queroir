<?php  
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
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

$sql = "INSERT INTO fale_conosco(email,nome,texto,assunto) VALUES ('$email','$nome','$mensagem','$assunto')";

$insert = mysqli_query($conexao, $sql);

if(!$insert){
    echo "<h4 style='color: red;'>Ocorreu um erro ao cadastrar o formulario.</h4>";
    header("location:/queroir");
}else{
   echo "<h3 style='color: blue;'>Inserido com sucesso!</h3>";
   header("location:/queroir");
}



?>
