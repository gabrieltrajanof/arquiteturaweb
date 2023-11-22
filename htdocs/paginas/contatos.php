<h2>contatos</h2>

<?php include_once 'conecta.inc.php'; ?>

<?php 




	$query = mysqli_query($conexao, "SELECT * FROM contatos WHERE id");
    // Litando valores retornados da tabela "contatos"
    while($tabela = mysqli_fetch_array($query)){
        echo $tabela['tipo'];
        echo $tabela['contato'];
    }
?>