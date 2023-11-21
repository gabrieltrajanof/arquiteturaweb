<?php  include "config.inc.php"; ?>
<?php

$id = $_GET['id'];
$sql = "SELECT * FROM paginas WHERE id = $id";
$busca = mysqli_query($conexao, $sql);

while($dados=mysqli_fetch_array($busca)){
    
?>

<form action="?pg=alterardb" method="post">
    <input type="hidden" name="id" value="<?=$dados['id'];?>"> 
<table>
    <tr>
        <td>Nome da página: </td>
        <td><input name="nome" type="text" value="<?=$dados['nome'];?>"/></td>
    </tr>
    <tr> 
        <td>URL: </td>
        <td><input name="link" type="text" value="<?=$dados['link'];?>"/></td>
    </tr>
    <tr>
        <td>Conteúdo: </td>
        <td><textarea name="conteudo" value="<?=$dados['conteudo'];?>"><?=$dados['conteudo'];?></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><button name="Enviar">Cadastrar</button></td>
    </tr>
</table>
</form>
<?php 
}
?>