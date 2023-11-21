<h2>Sobre</h2>
<?php include_once 'conecta.inc.php'; ?>
<div>
	<?php 
	// Trazendo dados da tabela Página
	$query = mysqli_query($conexao, "SELECT * FROM sobre WHERE id");
	
    // Litando valores retornados da tabela "paginas"
    while($tabela = mysqli_fetch_array($query)){
        echo $tabela['fator'];
        echo $tabela['Descrição'];
    }
	?>
	

</div>