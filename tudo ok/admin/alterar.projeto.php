<?php
if(isset($_GET['del'])){
    $id = $_GET['del'];
    $delete = mysqli_query($conexao, "DELETE FROM `projetos` WHERE id=$id");
    echo "Deletado com sucesso!";
    die();
}

$id = $_GET['id'];
$sql = "SELECT * FROM projetos WHERE id = $id";
$busca = mysqli_query($conexao, $sql);

while($dados=mysqli_fetch_array($busca)){
    
?>

<form action="?pg=alterardb.projeto" method="post">
<input type="hidden" name="id" value="<?=$dados['id'];?>"> 
    <div class="mb-3">
        <label>Projeto</label>
        <input type="text" name="projeto" class="form-control" value="<?=$dados['projeto'];?>">
    </div>
    <div class="mb-3">
        <label>conteudo</label>
        <input type="text" name= "conteudo" class="form-control"  value="<?=$dados['conteudo'];?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>

<?php 
}
?>