<?php include "config.inc.php"; ?>
<?php

$nome = $_POST['nome'];
$link = $_POST['link'];
$conteudo = $_POST['conteudo'];

$sql = "INSERT INTO paginas VALUES 
('','{$nome}', '{$link}', '{$conteudo}')";

// echo $sql;

$insert = mysqli_query($conexao, $sql);

if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados. <a href='?pg=inserir'>Tente Novamente</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3><br>";
   echo "<a href='?pg=inserir'>Cadastrar Novamente</a><br>";
   echo "<a href='?pg=listar'>Listar Páginas</a>";
}
?>