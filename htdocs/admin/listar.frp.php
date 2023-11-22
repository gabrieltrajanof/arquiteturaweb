<?php

$busca = "SELECT * FROM frp order by id";

$todos = mysqli_query($conexao, $busca);

?>
<table class='table table-hover table-striped table-bordered'>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Projeto</th>

    </tr>
    <?php while ($dados=mysqli_fetch_array($todos)) {?>
    
    <tr>
        <td><?=$dados['id'];?></td>
        <td><?=$dados['nome'];?></td>
        <td><?=$dados['email'];?></td>
        <td><?=$dados['telefone'];?></td>
        <td><?=$dados['projeto'];?></td>

    </tr>
    
    <?php } ?>


</table