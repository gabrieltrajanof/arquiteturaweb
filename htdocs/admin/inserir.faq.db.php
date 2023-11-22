<?php
$pergunta = $_POST['pergunta'];
$resposta = $_POST['resposta'];

$sql = "INSERT INTO faq VALUES 
('','{$pergunta}', '{$resposta}')";

// echo $sql;

$insert = mysqli_query($conexao, $sql);

if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados. <a href='?pg=inserir.faq'>Tente Novamente</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3><br>";
   echo "<a href='?pg=inserir.faq'>Cadastrar Novamente</a><br>";
   echo "<a href='?pg=listar.faq'>Listar FAQs</a>";
}
?>