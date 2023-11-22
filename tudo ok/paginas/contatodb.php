<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel"> 
        </div>
        <div class="col-md-6 col-serv">
		<?php
			
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$telefone = $_POST['telefone'];
			$projeto = $_POST['projeto'];

			$dados = "INSERT INTO frp (nome, email,telefone,projeto) VALUES ('$nome','$email','$telefone','$projeto')";
			
			$query = mysqli_query($conexao,$dados);

			if($query){
				echo "<h4>Formulário enviado com sucessso!</h4></center>";
		    }else{
		    	echo "<center><h4>Não foi possível enviar o e-mail. <a href=index.php?pg=frp>Tente novamente.</a></h4></center>";
		    }
		?>
		</div>
	  </div>
	</div>
</div>