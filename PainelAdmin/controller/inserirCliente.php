<?php 
header("content-type: text/html; charset=utf-8");
require_once("class/protect.php"); ?>
<div class="row">
    <div class="container">
        <form action="?pg=controller/inserirClientedb" method="post">
        <table>
            <tr>
                <td>Nome: </td>
                <td><input name="nome" class="form-control" type="text" required="required" /></td>
            </tr>
            <tr> 
                <td>Nome completo: </td>
                <td><input name="nomecompleto" class="form-control" type="text" required="e-mail"/></td>
            </tr>
            <tr> 
                <td>E-Mail: </td>
                <td><input name="email" class="form-control" type="e-mail" required="e-mail"/></td>
            </tr>
            <tr>
                <td>Senha: </td>
                <td><input name="senha" class="form-control" type="password"/></td>
            </tr>
            <tr> 
                <td>Tipo: </td>
                <td><input name="tipo" value="Comum ou Admin" class="form-control" type="text"/></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-primary" name="Enviar">Cadastrar</button></td>
            </tr>
        </table>
        </form>
    </div>
</div>