<?php

if(isset($_GET['del'])){
    $id = $_GET['del'];
    $delete = mysqli_query($conexao, "DELETE FROM `contatos` WHERE id=$id");
    echo "Deletado com sucesso!";
    die();
}

$id = $_GET['id'];
$sql = "SELECT * FROM contatos  WHERE id = $id";
$busca = mysqli_query($conexao, $sql);

while($dados=mysqli_fetch_array($busca)){
    
?>

<form action="?pg=alterardb.contato" method="post">
<input type="hidden" name="id" value="<?=$dados['id'];?>"> 
    <div class="mb-3">
        <label>Tipo</label>
        <input type="text" name="tipo" class="form-control" value="<?=$dados['tipo'];?>">
    </div>
    <div class="mb-3">
        <label>Contato</label>
        <input type="text" name= "contato" class="form-control"  value="<?=$dados['contato'];?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>
<?php 
}
?>