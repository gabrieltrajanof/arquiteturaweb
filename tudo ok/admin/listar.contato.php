<?php

$busca = "SELECT * FROM contatos order by id";

$todos = mysqli_query($conexao, $busca);

?>
<table class='custom-table'>
    <tr>
        <th>ID</th>
        <th>Tipo</th>
        <th>Contato</th>
        <th>Ações</th>
    </tr>
    <?php while ($dados=mysqli_fetch_array($todos)) {?>
    
    <tr>
        <td><?=$dados['id'];?></td>
        <td><?=$dados['tipo'];?></td>
        <td><?=$dados['contato'];?></td>
        <td>
            <button class='btn btn-success'><a href="?pg=alterar.contato&id=<?=$dados['id']; ?>">Editar</a> </button>
            <button class='btn btn-danger'><a href="?pg=alterar.contato&del=<?=$dados['id']; ?>">Excluir</a></button>
        </td>
    </tr>
    
    <?php } ?>


</table