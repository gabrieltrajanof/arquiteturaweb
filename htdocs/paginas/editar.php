<?php
include_once 'conecta.inc.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = $_GET["id"];
    $result = $conn->query("SELECT * FROM contatos WHERE id = $id");
    $contato = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Contato</title>
</head>
<body>
    <h2>Editar Contato</h2>
    <form action="atualizar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $contato['id']; ?>">
        Plataforma: <input type="text" name="plataforma" value="<?php echo $contato['plataforma']; ?>" required><br>
        Contato: <input type="text" name="contato" value="<?php echo $contato['contato']; ?>" required><br>
        <input type="submit" value="Atualizar Contato">
    </form>
</body>
</html>

<?php
$db->close();
?>