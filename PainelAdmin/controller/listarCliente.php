<?php 
header("content-type: text/html; charset=utf-8");
require_once("class/protect.php"); ?>
<script language='javascript'>

function confirmaExclusao(aURL) {

if(confirm('Você tem certeza que deseja excluir?')) {

location.href = aURL;

}

}

</script>
<?php

$busca = "Select * from login order by idUser";

$todos = mysqli_query($conexao, $busca);?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <table>
            <tr>
                <td style="width: 60px;">ID:</td>
                <td style="width: 205px;">Nome completo:</td>
                <td style="width: 305px;">Nome:</td>
                <td style="width: 105px;">E-mail:</td>
                <td style="width: 105px;">tipo:</td>
                <td style="width: 105px;">Alterar</td>
                <td style="width: 105px;">Excluir</td>
             </tr>
    <?php while ($dados=mysqli_fetch_array($todos)) {?>
    <div>
        <tr>
            <td><?=$dados['idUser'];?></td>
            <td><?=$dados['usuario'];?></td>
            <td><?=$dados['nome'];?></td>
            <td><?=$dados['email'];?> </td>
            <td><?=$dados['tipo'];?></td>
            <td><a href="?pg=controller/alterarCliente&id=<?=$dados['idUser']; ?>" class="btn btn-default" role="button">Alterar</a></td>
            
            <td><a href="javascript:confirmaExclusao('?pg=controller/excluirClientedb&id=<?=$dados['idUser']; ?>')" class="btn btn-warning" role="button">Excluir</a></td>
            
        </tr>
    </div>  
             <?php } ?>
        </table>
    </div>
    </div>
</div>
