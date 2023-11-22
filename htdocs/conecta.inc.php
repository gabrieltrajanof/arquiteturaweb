<?php
    // conectando ao servidor
    $conexao = mysqli_connect("localhost:33066","root","");

    // conectando ao BD criado
    $db = mysqli_select_db($conexao, "projetofinal");

    // Executando query e retornando valores da tabela "faleconosco"
    $query = mysqli_query($conexao, "SELECT * FROM paginas");



?>