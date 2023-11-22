<?php

$id =           $_POST['id'];
$projeto =       $_POST['projeto'];
$conteudo =        $_POST['conteudo'];


$sql2 = mysqli_query($conexao, "SELECT * FROM projetos WHERE id='$id'");

$sql = "UPDATE projetos SET projeto='$projeto', conteudo='$conteudo' WHERE id=$id";
$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=listar.projeto'>Voltar</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>
<a href='?pg=listar.projeto'>Voltar</a>";
}
?>