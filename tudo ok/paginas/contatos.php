<h2>Contatos</h2>
<div>
	<?php 
	// Trazendo dados da tabela Página
	$query = mysqli_query($conexao, "SELECT * FROM contatos");
	
    // Litando valores retornados da tabela "paginas"
    while($tabela = mysqli_fetch_array($query)){
    ?>

    <?= $tabela['tipo']; ?> <br> 
    <?= $tabela['contato']; ?>

    <?php } ?>
	

</div>