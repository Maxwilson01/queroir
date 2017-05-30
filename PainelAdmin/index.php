<?php
require_once("class/protect.php");
include "controller/config.inc.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>cPainel</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="ckeditor/ckeditor.js"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Painel Administrativo
                    </a>
                </li>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="../index.php">Ir ao Site</a>
                </li>
                <li>
                    <a href="?pg=controller/listarEventos">Evento</a>
                </li>
                <li>
                    <a href="?pg=controller/inserirEvento">Cadastrar evento</a>
                </li>
                <li>
                    <a href="?pg=controller/listarContatos">Contatos</a>
                </li>
                <li>
                    <a href="?pg=controller/listarCliente">Clientes</a> 
                </li>
                <li>
                    <a href="?pg=controller/inserirCliente">Cadastrar cliente</a>
                </li>
                <li>
                    <a href="?pg=class/logout">Sair</a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                       <!-- Inserir as coisas principal aqui -->
                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <?php
        // Declarando as variáveis de acesso as páginas
        $var = "controller/home.php";
        // o @ suprime avisos de erro do PHP.
        @$pg = $_GET['pg'];
        if(empty($_SERVER["QUERY_STRING"])) {
            include("$var");
        } else {
            include("$pg.php");
        }
    ?>
        
        <hr>
        <br><br><br><br>
        <?php include "controller/footer.php"; ?>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>
</html>
