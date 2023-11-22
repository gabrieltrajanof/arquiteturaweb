<?php include "config.inc.php"; ?>
<?php

$busca = "SELECT * FROM paginas order by id";

$todos = mysqli_query($conexao, $busca);

?>
<table class='table table-hover table-striped table-bordered'>
    <tr>
        <th>ID</th>
        <th>Nome da página</th>
        <th>Link</th>
        <th>Conteúdo</th>
        <th>Ações</th>
    </tr>
    <?php while ($dados=mysqli_fetch_array($todos)) {?>
    
    <tr>
        <td><?=$dados['id'];?></td>
        <td><?=$dados['nome'];?></td>
        <td><?=$dados['link'];?></td>
        <td><?=$dados['conteudo'];?></td>
        <td>
            <button class='btn btn-success'><a href="?pg=alterar&id=<?=$dados['id']; ?>">Editar</a> </button>
            <button class='btn btn-danger'>Excluir</button>
        </td>
    </tr>
    
    <?php } ?>


</table