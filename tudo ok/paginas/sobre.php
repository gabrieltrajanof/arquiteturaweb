<h2>Quem é Diego Porto?</h2>
<div>
	<?php 
	// Trazendo dados da tabela sobre
	$query = mysqli_query($conexao, "SELECT * FROM sobre");
	
    // Litando valores retornados da tabela "sobre"
    while($tabela = mysqli_fetch_array($query)){
    ?>

    <?= $tabela['fator']; ?> <br> 
    <?= $tabela['descricao']; ?>

    <?php } ?>
	

</div>