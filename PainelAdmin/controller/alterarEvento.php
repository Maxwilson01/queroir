<?php

require_once("class/protect.php");

header("content-type: text/html; charset=utf-8");

$id = $_GET['id'];
$sql = "SELECT * FROM evento_insc WHERE idEvento = $id";

$busca = mysqli_query($conexao, $sql);

while($dados=mysqli_fetch_array($busca)){  
    
?>
<div class="row">
    <div class="container">
        <form action="?pg=controller/alterardbEvento" method="post">
        <input type="hidden" name="id" value="<?=$dados['idEvento'];?>"> 
        <table>
            <tr>
                <td>Titulo: </td>
                <td><input name="titulo" value="<?=$dados['titulo'];?>" class="form-control" type="text" required="required" /></td>
            </tr>
            <tr> 
                <td>Organização: </td>
                <td><input name="organizador" value="<?=$dados['organizador'];?>" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td>E-mail Organização: </td>
                <td><input name="emailOrg" value="<?=$dados['emailOrg'];?>" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td>Data de inicio do evento: </td>
                <td><input name="DataIn" value="<?php echo $dados['dataIniEv']; ?>" class="form-control" type="date" required="required"/></td>
            </tr>
             <tr>
                <td>Data final do evento: </td>
                <td><input name="DataFim" value="<?php echo $dados['dataFimEv']; ?>" class="form-control" type="date" required="required"/></td>
            </tr>
            <tr>
                <td>Localidade: </td>
                <td><input name="localidade" value="<?=$dados['localidade'];?>" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td>Tipo: </td>
                <td><input name="tipo" value="<?=$dados['tipo'];?>" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td>Data da incrição: </td>
                <td><input name="dataInc"  value="<?php echo $dados['dataIniInsc']; ?>" class="form-control" type="date" required="required"/></td>
            </tr>
            <tr>
                <td>Data da incrição final: </td>
                <td><input name="dataIncFim" value="<?php echo $dados['dataFimInsc']; ?>" class="form-control" type="date" required="required"/></td>
            </tr>
            <tr>
                <td>Preço: </td>
                <td><input name="preco" value="<?=$dados['preco'];?>" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td>Imagem: </td>
                <td><input name="img" value="<?=$dados['imagem'];?>" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td>Vídeo: </td>
                <td><input name="video" value="<?=$dados['video'];?>" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td>Descrição: </td>
                <td><textarea name="descricao" class="form-control" id="texto" rows="10" cols="100"><?=$dados['descricao'];?></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-primary" name="Enviar">Atualizar</button></td>
            </tr>
        </table>
        </form>
    </div>
</div>
<?php 
}
?>