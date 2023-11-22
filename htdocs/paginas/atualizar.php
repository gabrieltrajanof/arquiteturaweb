<?php
include_once 'conecta.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $plataforma = $_POST["plataforma"];
    $contato = $_POST["contato"];

    $sql = "UPDATE contatos SET plataforma='$plataforma', contato='$contato' WHERE id=$id";

    if ($db->query($sql) === TRUE) {
        echo "Contato atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar contato: " . $db->error;
    }
}

$db->close();
?>