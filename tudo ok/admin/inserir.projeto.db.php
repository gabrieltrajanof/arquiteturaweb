<?php
$projeto = $_POST['projeto'];
$conteudo = $_POST['conteudo'];

$sql = "INSERT INTO projetos VALUES 
('','{$projeto}', '{$conteudo}')";

// echo $sql;

$insert = mysqli_query($conexao, $sql);

if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados. <a href='?pg=inserir.projeto'>Tente Novamente</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3><br>";
   echo "<a href='?pg=inserir.projeto'>Cadastrar Novamente</a><br>";
   echo "<a href='?pg=listar.projeto'>Listar Projetos</a>";
}
?>