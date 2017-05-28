<?php 
header("content-type: text/html; charset=utf-8");
require_once("class/protect.php"); ?>
<div class="row">
    <div class="container">
        <form action="?pg=controller/inserirEventodb" method="post">
        <table>
            <tr>
                <td>Titulo: </td>
                <td><input name="titulo" class="form-control" type="text" required="required" /></td>
            </tr>
            <tr> 
                <td>Organização: </td>
                <td><input name="organizador" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td>E-mail Organização: </td>
                <td><input name="emailOrg" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td>Data de inicio do evento: </td>
                <td><input name="DataIn" class="form-control" type="date"/></td>
            </tr>
             <tr>
                <td>Data final do evento: </td>
                <td><input name="DataFim" class="form-control" type="date"/></td>
            </tr>
            <tr>
                <td>Localidade: </td>
                <td><input name="localidade" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td>Tipo: </td>
                <td><input name="tipo" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td>Data da incrição: </td>
                <td><input name="dataInc" class="form-control" type="date"/></td>
            </tr>
            <tr>
                <td>Data da incrição final: </td>
                <td><input name="dataIncFim" class="form-control" type="date"/></td>
            </tr>
            <tr>
                <td>Preço: </td>
                <td><input name="preco" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td>Imagem: </td>
                <td><input name="img" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td>Vídeo: </td>
                <td><input name="video" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td>Descrição: </td>
                <td><textarea name="descricao" class="form-control" id="texto" rows="10" cols="100"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-primary" name="Enviar">Cadastrar</button></td>
            </tr>
        </table>
        </form>
    </div>
</div>