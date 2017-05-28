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

$busca = "Select * from fale_conosco order by idFc";

$todos = mysqli_query($conexao, $busca);?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
        <table>
            <tr>
                <td style="width: 60px;">ID:</td>
                <td style="width: 205px;">Nome:</td>
                <td style="width: 105px;">E-Mail:</td>
                <td style="width: 205px;">Assunto:</td>
                <td style="width: 100px;">Texto:</td>
                <td style="width: 10px;">Excluir</td>
             </tr>
    <?php while ($dados=mysqli_fetch_array($todos)) {?>
    <div>
        <tr>
            <td><?=$dados['idFc'];?></td>
            <td><?=$dados['nome'];?></td>
            <td><?=$dados['email'];?></td>
            <td><?=$dados['assunto'];?></td>
            <td><?=$dados['texto'];?></td>
            <td><br><a href="javascript:confirmaExclusao('?pg=controller/excluirContatos&id=<?=$dados['idFc']; ?>')" class="btn btn-warning" role="button">Excluir</a></td>
            
        </tr>
    </div>  
             <?php } ?>
        </table>
    </div>
    </div>
</div>
