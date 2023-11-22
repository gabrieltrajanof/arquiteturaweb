<?php

$id =           $_POST['id'];
$fator =       $_POST['fator'];
$descricao =        $_POST['descricao'];


$sql2 = mysqli_query($conexao, "SELECT * FROM sobre WHERE id='$id'");

$sql = "UPDATE sobre SET fator='$fator', descricao='$descricao' WHERE id=$id";
$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=listar.sobre'>Voltar</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>
<a href='?pg=listar.sobre'>Voltar</a>";
}
?>