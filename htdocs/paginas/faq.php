<h2>Dúvidas</h2>
<div>
	<?php 
	// Trazendo dados da tabela FAQ
	$query = mysqli_query($conexao, "SELECT * FROM faq");
	
    // Litando valores retornados da tabela "fAQ"
    while($tabela = mysqli_fetch_array($query)){
    ?>

    <?= $tabela['pergunta']; ?> <br>
    <?= $tabela['resposta']; ?>

    <?php } ?>
	

</div>