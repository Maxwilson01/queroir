<?php
header("content-type: text/html; charset=utf-8");
require_once("class/protect.php");
$id = $_POST['id'];

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
$sql2 = mysqli_query($conexao, "SELECT * FROM evento_insc WHERE idEvento='$id'");

$sql ="UPDATE evento_insc SET titulo='$titulo',organizador='$org',emailOrg='$emailOrg',descricao='$descricao',dataIniEv='$DataInicioEv',dataFimEv='$DataFimEv',localidade='$localidade',tipo='$tipo',dataIniInsc='$DataInc',dataFimInsc='$DataIncFim',preco='$preco',imagem='$img',video='$video' WHERE idEvento=$id";

$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=controller/listarEventos'>Voltar</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>
<a href='?pg=controller/listarEventos'>Voltar</a>";
}
?>