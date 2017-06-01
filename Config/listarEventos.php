<?php 
header("content-type: text/html; charset=utf-8");
include_once("config.inc.php");
$busca = "Select * from evento_insc order by idEvento";
$todos = mysqli_query($conexao, $busca);?>

<div class="container"><br><br><br>
  <?php while ($dados=mysqli_fetch_array($todos)) {?>
  <div class="media">
  
    <div class="media-left">
      <img src="<?=$dados['imagem'];?>" class="media-object img-rounded" style="width:300px">
    </div>
    <div class="media-body">
      <h4 class="media-heading"><?=$dados['titulo'];?></h4>
      <?php 
          $res = substr($dados['descricao'],0,650);
      		echo "<p>$res ...</p>";
      		$id = $dados['idEvento'];
          echo "<a href='?pg=Config/LendoEvento&id=$id' class='btn btn-primary'>Continuar lendo</a>"
        ?>
    </div>
  </div>
  <hr>
  <?php } ?>
</div>
<center><ul class="pagination pagination-sm ">
  	<li class="active" ><a href="#">1</a></li> <!--Banco irá gerar paginação automaticamente -->
  	<li><a href="#">2</a></li>
  	<li><a href="#">3</a></li>
  	<li><a href="#">4</a></li>
  	<li><a href="#">5</a></li>
</ul></center>