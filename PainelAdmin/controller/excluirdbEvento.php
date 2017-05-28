<?php
header("content-type: text/html; charset=utf-8");
require_once("class/protect.php");
	$id = $_REQUEST['id'];

	$sql = "DELETE from postagem WHERE id=$id";
	$deleta = mysqli_query($conexao, $sql);

	if(!$deleta){
	    echo "<h4 style='color: red;'>Ocorreu um erro ao deletar dados no banco de dados.</h4> <br>
	    	<a href='?pg=controller/listar'>Voltar</a>";
	}else{
	   echo "<h3 style='color: green;'>Deletado com sucesso!</h3>
			<a href='?pg=controller/listar'>Voltar</a>";
	}

?>