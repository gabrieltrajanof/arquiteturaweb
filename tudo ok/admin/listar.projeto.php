<?php

$busca = "SELECT * FROM projetos order by id";

$todos = mysqli_query($conexao, $busca);

?>
<table class='custom-table'>
    <tr>
        <th>ID</th>
        <th>PROJETO</th>
        <th>Conteúdo</th>
        <th>Ações</th>
    </tr>
    <?php while ($dados=mysqli_fetch_array($todos)) {?>
    
    <tr>
        <td><?=$dados['id'];?></td>
        <td><?=$dados['projeto'];?></td>
        <td><?=$dados['conteudo'];?></td>
        <td>
            <button class='btn btn-success'><a href="?pg=alterar.projeto&id=<?=$dados['id']; ?>">Editar</a> </button>
            <button class='btn btn-danger'><a href="?pg=alterar.projeto&del=<?=$dados['id']; ?>">Excluir</a></button>
        </td>
    </tr>
    
    <?php } ?>


</table