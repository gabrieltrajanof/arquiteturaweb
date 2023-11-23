<div class="container">
	<h2>Orçamento</h2>
	<form id="contactForm" action="?pg=contatodb" class="custom-form" method="post">

		<label>Nome:</label> <input type="text" class="form-control" name="nome" required="" data-validation-required-message="Please enter your name."><br>
		<label>E-mail: </label><input type="email" class="form-control" name="email" /><br>
		<label>Telefone: </label><input type="tel" class="form-control" name="telefone" /><br>
		<label>Projeto:</label><textarea class="form-control" name="projeto" rows="5" cols="10"></textarea><br>
		<button type="submit" class="btn btn-primary">Enviar</button>
	</form>
</div>