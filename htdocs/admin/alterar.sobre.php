<?php
if(isset($_GET['del'])){
    $id = $_GET['del'];
    $delete = mysqli_query($conexao, "DELETE FROM `sobre` WHERE id=$id");
    echo "Deletado com sucesso!";
    die();
}

$id = $_GET['id'];
$sql = "SELECT * FROM sobre WHERE id = $id";
$busca = mysqli_query($conexao, $sql);

while($dados=mysqli_fetch_array($busca)){
    
?>

<form action="?pg=alterardb.sobre" method="post">
<input type="hidden" name="id" value="<?=$dados['id'];?>"> 
    <div class="mb-3">
        <label>Fator</label>
        <input type="text" name="fator" class="form-control" value="<?=$dados['fator'];?>">
    </div>
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name= "descricao" class="form-control"  value="<?=$dados['descricao'];?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>

<?php 
}
?>