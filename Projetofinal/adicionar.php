<?php
include_once 'conecta.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $plataforma = $_POST["plataforma"];
    $contato = $_POST["contato"];

    $sql = "INSERT INTO contatos (plataforma, contato) VALUES ('$plataforma', '$contato')";

    if ($conn->query($sql) === TRUE) {
        echo "Contato adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar contato: " . $db->error;
    }
}

$db->close();
?>