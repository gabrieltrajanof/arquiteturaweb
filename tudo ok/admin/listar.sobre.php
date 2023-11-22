<?php

$busca = "SELECT * FROM sobre order by id";

$todos = mysqli_query($conexao, $busca);

?>
<table class='custom-table'>
    <tr>
        <th>ID</th>
        <th>Fator</th>
        <th>Descrição</th>
        <th>Ações</th>
    </tr>
    <?php while ($dados=mysqli_fetch_array($todos)) {?>
    
    <tr>
        <td><?=$dados['id'];?></td>
        <td><?=$dados['fator'];?></td>
        <td><?=$dados['descricao'];?></td>
        <td>
            <button class='btn btn-success'><a href="?pg=alterar.sobre&id=<?=$dados['id']; ?>">Editar</a> </button>
            <button class='btn btn-danger'><a href="?pg=alterar.sobre&del=<?=$dados['id']; ?>">Excluir</a></button>
        </td>
    </tr>
    
    <?php } ?>


</table