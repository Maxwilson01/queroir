<?php 
include_once("config.inc.php");


$busca = "SELECT * FROM evento_insc ORDER BY RAND() LIMIT 4";
$todos = mysqli_query($conexao, $busca);
 ?>   
   <div class="diveventos">
   <div class="container">
   
        <!--
        <header class="jumbotron hero-spacer">
            <h1>Bem vindo(a) ao quero ir!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
            <p><a href="?pg=Config/about" class="btn btn-primary btn-large">Sobre</a>
            </p>
        </header>

        <hr>

        <div class="row">
            <div class="col-lg-12">
                <h3>Ultimos Eventos</h3>
            </div>
        </div>
        -->
        
        <div class="row text-center">
            <?php while ($dados=mysqli_fetch_array($todos)) { ?> 
            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?=$dados['imagem'];?>" alt="">
                    <div class="caption">
                        <h3><?=$dados['titulo'];?></h3>
                        <?php 
                        $res = substr($dados['descricao'],0,128);
                        echo "<p>$res ...</p>";
                        $id = $dados['idEvento'];
                        echo "<p><a href='?pg=Config/LendoEvento&id=$id' class='btn btn-primary'>Continuar lendo</a></p>"
                        ?>
                    </div>

                </div>
            </div>
          <?php } ?>
        </div>    
    </div>
</div>
