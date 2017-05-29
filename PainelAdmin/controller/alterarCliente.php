<?php
header("content-type: text/html; charset=utf-8");
require_once("class/protect.php");
$id = $_GET['id'];
$sql = "SELECT * FROM login WHERE idUser = $id";
$busca = mysqli_query($conexao, $sql);

while($dados=mysqli_fetch_array($busca)){  
?>
<div class="container">
<form action="?pg=controller/alterarClientedb" method="post">
    <input type="hidden" name="id" value="<?=$dados['idUser'];?>"> 
        <table>
            <tr>
                <td>Nome: </td>
                <td><input name="nome" value="<?=$dados['nome'];?>" class="form-control" type="text" required="required" /></td>
            </tr>
            <tr> 
                <td>Nome completo: </td>
                <td><input name="nomecompleto" value="<?=$dados['usuario'];?>" class="form-control" type="text" required="e-mail"/></td>
            </tr>
            <tr> 
                <td>E-Mail: </td>
                <td><input name="email" value="<?=$dados['email'];?>" class="form-control" type="e-mail" required="e-mail"/></td>
            </tr>
            <tr>
                <td>Senha: </td>
                <td><input name="senha" class="form-control" type="password"/></td>
            </tr>
            <tr> 
                <td>Tipo: </td>
                <td><input name="tipo" value="<?=$dados['tipo'];?>" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-primary" name="Enviar">Atualizar</button></td>
            </tr>
        </table>
</form>
</div>
<?php 
}
?>