<h2>contatos</h2>
<?php
include_once 'conecta.inc.php';

// Exibir contatos existentes
$result = $db->query("SELECT * FROM contatos");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Painel de Contatos</title>
</head>
<body>
    <h1>Lista de Contatos</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Plataforma</th>
            <th>Contato</th>
            <th>Ações</th>
        </tr>

        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['plataforma']}</td>";
            echo "<td>{$row['contato']}</td>";
            echo "<td><a href='editar.php?id={$row['id']}'>Editar</a> | <a href='excluir.php?id={$row['id']}'>Excluir</a></td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h2>Adicionar Novo Contato</h2>
    <form action="adicionar.php" method="post">
        Plataforma: <input type="text" name="plataforma" required><br>
        Contato: <input type="text" name="contato" required><br>
        <input type="submit" value="Adicionar Contato">
    </form>
</body>
</html>

<?php
$db->close();
?>