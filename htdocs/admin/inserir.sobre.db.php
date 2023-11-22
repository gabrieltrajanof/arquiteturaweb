<?php
$fator = $_POST['fator'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO sobre VALUES 
('','{$fator}', '{$descricao}')";

// echo $sql;

$insert = mysqli_query($conexao, $sql);

if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados. <a href='?pg=inserir.sobre'>Tente Novamente</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3><br>";
   echo "<a href='?pg=inserir.sobre'>Cadastrar Novamente</a><br>";
   echo "<a href='?pg=listar.sobre'>Listar Sobre</a>";
}
?>