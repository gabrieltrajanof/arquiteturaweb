
<?php

$id =           $_POST['id'];
$tipo =       $_POST['tipo'];
$contato =        $_POST['contato'];


$sql2 = mysqli_query($conexao, "SELECT * FROM contatos WHERE id='$id'");

$sql = "UPDATE contatos SET tipo='$tipo', contato='$contato' WHERE id=$id";
$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=listar.contato'>Voltar</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>
<a href='?pg=listar.contato'>Voltar</a>";
}
?>