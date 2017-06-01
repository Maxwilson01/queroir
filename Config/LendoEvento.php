<?php
header("content-type: text/html; charset=utf-8");
include_once("config.inc.php");
$id = $_GET['id'];

$busca = "Select * from evento_insc where idEvento = $id";
$todos = mysqli_query($conexao, $busca);
while ($dados=mysqli_fetch_array($todos)) {
$urlvid = $dados['video'];
$videoMP = "<video width='320' height='240' controls><source src='$urlvid' type='video/mp4'></video>";
?>
<div class="container"><br><br><br>
	<div class="row">
		<div class="col-sm-12">
			<h3><?=$dados['titulo'];?></h3>
			<hr>
		</div>
		<div class="col-sm-7">
			<p><strong>Organizdor:</strong> <?=$dados['organizador'];?></p>
			<p><strong>Endereço:</strong> <?=$dados['localidade'];?></p>
			<p><strong>E-mail:</strong> <?=$dados['emailOrg'];?></p>
			<p><strong>Inicio das incrições:</strong> <?php echo date('d/m/Y', strtotime($dados['dataIniInsc'])); ?></p>
			<p><strong>Fim das inscrições: </strong><?php echo date('d/m/Y', strtotime($dados['dataFimInsc'])); ?></p>
			<p><strong>Valor: R$</strong><?=$dados['preco'];?></p>

		</div>
		<div class="col-sm-5">
			<img src="<?=$dados['imagem'];?>" width="300">
		</div>
		<div class="col-sm-12">
			<hr>
			<p>Descrição:</p>
			<p><?=$dados['descricao'];?></p>
			<?php 
				if ($dados['video'] == !null) {
              		echo $videoMP;
				} ?>

		</dir>

	</div>
</div>
<?php } ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9&appId=685701084961846";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="localhost:85/queroir/?pg=Config/LendoEvento&id=<?=$id?>" data-width="500" data-numposts="20"></div>

