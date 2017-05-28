<?php
header("content-type: text/html; charset=utf-8");
require_once("class/protect.php");

$titulo = $_POST['titulo'];
$org = $_POST['organizador'];
$emailOrg =$_POST['emailOrg'];

// Data quando começa termina o evento
$DataFimEv = date('Y/m/d', strtotime($_POST['DataFim']));
$DataInicioEv = date('Y/m/d', strtotime($_POST['DataIn']));
// ============================ //
$localidade = $_POST['localidade'];
$tipo = $_POST['tipo'];
//==== Data de incrição do evento
$DataInc  = date('Y/m/d', strtotime($_POST['dataInc']));
$DataIncFim = date('Y/m/d', strtotime($_POST['dataIncFim']));
// ============================ //

$preco= $_POST['preco'];
$img = $_POST['img'];
$video = $_POST['video'];
$descricao = $_POST['descricao'];
$sql = "INSERT INTO evento_insc (titulo,organizador,emailOrg,descricao,dataIniEv,dataFimEv,localidade,tipo,dataIniInsc,dataFimInsc,preco,imagem,video)VALUES ('$titulo', '$org', '$emailOrg','$descricao','$DataInicioEv','$DataFimEv','$localidade','$tipo','$DataInc','$DataIncFim', '$preco','$img','$video')";
/*$sql = "INSERT INTO postagem (titulo, organizador, emailOrg, descricao, dataIniEv, dataFimEv,localidade, tipo, dataIniInsc,dataFimInsc,preco,imagem,video) VALUES 
('$titulo', '$org', '$emailOrg','$descricao','$DataInicioEv','$DataFimEv','$localidade','$tipo','$DataInc','$DataIncFim', '$preco','$img','$video')";*/

$insert = mysqli_query($conexao, $sql);

if(!$insert){
    echo "<h4 style='color: red;'>Ocorreu um erro ao cadastrar no banco de dados.</h4> <a href='?pg=controller/inserir'>Tente Novamente</a>";
}else{
   echo "<h3 style='color: blue;'>Inserido com sucesso!</h3>";
   header("location:?pg=controller/inserirEvento");
}
?>