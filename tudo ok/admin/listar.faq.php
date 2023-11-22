<?php

$busca = "SELECT * FROM faq order by id";

$todos = mysqli_query($conexao, $busca);

?>
<table class='table table-hover table-striped table-bordered'>
    <tr>
        <th>ID</th>
        <th>Dúvida</th>
        <th>Resposta</th>
        <th>Ações</th>
    </tr>
    <?php while ($dados=mysqli_fetch_array($todos)) {?>
    
    <tr>
        <td><?=$dados['id'];?></td>
        <td><?=$dados['pergunta'];?></td>
        <td><?=$dados['resposta'];?></td>
        <td>
            <button class='btn btn-success'><a href="?pg=alterar.faq&id=<?=$dados['id']; ?>">Editar</a> </button>
            <button class='btn btn-danger'><a href="?pg=alterar.faq&del=<?=$dados['id']; ?>">Excluir</a></button>
        </td>
    </tr>
    
    <?php } ?>


</table