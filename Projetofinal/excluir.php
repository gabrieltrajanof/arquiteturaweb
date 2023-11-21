<?php
include_once 'conecta.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];
    $sql = "DELETE FROM contatos WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Contato excluído com sucesso!";
    } else {
        echo "Erro ao excluir contato: " . $db->error;
    }
}

$db->close();
?>