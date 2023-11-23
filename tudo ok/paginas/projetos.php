<h2>Projetos</h2>
<div>
	<?php 
	// Trazendo dados da tabela Página
	$query = mysqli_query($conexao, "SELECT * FROM projetos");
	
    // Litando valores retornados da tabela "paginas"
    while($tabela = mysqli_fetch_array($query)){
    ?>

    <?= $tabela['projeto']; ?> <br> <br> 
    <img src="<?= $tabela['conteudo']; ?>">

    <?php } ?>
	

</div>