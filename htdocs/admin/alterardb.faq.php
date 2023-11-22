<?php

$id =           $_POST['id'];
$pergunta =       $_POST['pergunta'];
$resposta =        $_POST['resposta'];


$sql2 = mysqli_query($conexao, "SELECT * FROM faq WHERE id='$id'");

$sql = "UPDATE faq SET pergunta='$pergunta', resposta='$resposta' WHERE id=$id";
$altera = mysqli_query($conexao, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=listar.faq'>Voltar</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3>
<a href='?pg=listar.faq'>Voltar</a>";
}
?>