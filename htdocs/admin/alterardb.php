<?php include "config.inc.php";?>
<?php

$id =           $_POST['id'];
$nome =       $_POST['nome'];
$link =    $_POST['link'];
$conteudo =        $_POST['conteudo'];


$sql2 = mysqli_query($conexao, "SELECT * FROM paginas WHERE id='$id'");

$sql = "UPDATE paginas SET nome='$nome', link='$link', conteudo='$conteudo' WHERE id=$id";
$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=listar'>Voltar</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>
<a href='?pg=listar'>Voltar</a>";
}
?>