<h2>Perguntas Frequentes</h2>
<div>
	<?php 
	// Trazendo dados da tabela Página
	$query = mysqli_query($conexao, "SELECT * FROM faq WHERE id");
	
    // Litando valores retornados da tabela "paginas"
    while($tabela = mysqli_fetch_array($query)){
        echo $tabela['perguntas'];
        echo $tabela['respostas'];
    }
	?>
	

</div>