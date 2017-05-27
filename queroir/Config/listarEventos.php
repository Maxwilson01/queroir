<div class="container">
	<div class="media">
    <div class="media-left">
      <img src="http://placehold.it/800x500" class="media-object img-rounded" style="width:300px">
    </div>
    <div class="media-body">
    <!--style="overflow: hidden; width:120em; border:1px; white-space:nowrap;" -->
      <h4 class="media-heading">Titulo</h4>
      <?php 
      	$res = substr("Ao contrário do que se acredita, Lorem Ipsum não é simplesmente um texto randômico. Com mais de 2000 anos, suas raízes podem ser encontradas em uma obra de literatura latina clássica datada de 45 AC. Richard McClintock, um professor de latim do Hampden-Sydney College na Virginia, pesquisou uma das mais obscuras palavras em latim, consectetur, oriunda de uma passagem de Lorem Ipsum, e, procurando por entre citações da palavra na literatura clássica, descobriu a sua indubitável origem. Lorem Ipsum vem das seções 1.10.32 e 1.10.33 do 'de Finibus Bonorum et Malorum' (Os Extremos do Bem e do Mal), de Cícero, escrito em 45 AC. Este livro é um tratado de teoria da ética muito popular na época da Renascença. A primeira linha de Lorem Ipsum, 'Lorem Ipsum dolor sit amet...' vem de uma linha na seção 1.10.32.",0,650);
      		// Falha se por causa no banco vir com aspas duplas!

      		echo "<p>$res ...</p>";
      		echo "<a href='#' class='btn btn-primary'>Continuar lendo</a>"
       ?>
      
    </div>
  </div>
  <hr>
</div>

<!--class="btn btn-primary" -->
<center><ul class="pagination pagination-sm ">
  	<li class="active" ><a href="#">1</a></li> <!--Banco irá gerar paginação automaticamente -->
  	<li><a href="#">2</a></li>
  	<li><a href="#">3</a></li>
  	<li><a href="#">4</a></li>
  	<li><a href="#">5</a></li>
</ul></center>