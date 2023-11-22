<?php
$tipo = $_POST['tipo'];
$contato = $_POST['contato'];

$sql = "INSERT INTO contatos VALUES 
('','{$tipo}', '{$contato}')";

// echo $sql;

$insert = mysqli_query($conexao, $sql);

if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados. <a href='?pg=inserir.contato'>Tente Novamente</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3><br>";
   echo "<a href='?pg=inserir.contato'>Cadastrar Novamente</a><br>";
   echo "<a href='?pg=listar.contato'>Listar Contatos</a>";
}
?>