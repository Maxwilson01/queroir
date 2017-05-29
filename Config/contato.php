<div class="divcontato">
	<div class="container">
	    <h3>Fale conosco</h3>   
		 <form  id="contactForm" action="/queroir/Model/CContato.php" method="post">
		     
		 	<label>Nome:</label> <input type="text" class="form-control" name="nome" required="" data-validation-required-message="Please enter your name.">
		 	E-mail: <input type="email" class="form-control" name="email"/>
		 	Assunto: <input type="text" class="form-control" name="assunto"/>
		 	Mensagem:<textarea class="form-control" name="mensagem" rows="5" cols="10"></textarea><br>
		 <button type="submit" class="btn btn-primary">Enviar</button>
		</form>
	</div>
	<br>
</div>