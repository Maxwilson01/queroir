<?php  
/*$host = "localhost";
$bd = "pqueroirpb";
$user = "root";
$pass = "";

$conexao = mysqli_connect($host,$user,$pass);

$banco = mysqli_select_db($conexao, $bd);

if(!$conexao){
    echo "Conexão com banco de dados Falhou";
}*/
include_once("/config.inc.php");
$busca = "Select * from evento_insc order by idEvento";
$todos = mysqli_query($conexao, $busca);
while ($dados=mysqli_fetch_array($todos)) {
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.9&appId=685701084961846";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-comments" data-href="http://queroir.esy.es/?pg=Config/LendoEvento&id<?=$dados['idEvento'];?>" data-width="500" data-numposts="20"></div>
<?php } ?>