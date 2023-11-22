<?php
if(isset($_GET['del'])){
    $id = $_GET['del'];
    $delete = mysqli_query($conexao, "DELETE FROM `faq` WHERE id=$id");
    echo "Deletado com sucesso!";
    die();
}

$id = $_GET['id'];
$sql = "SELECT * FROM faq WHERE id = $id";
$busca = mysqli_query($conexao, $sql);

while($dados=mysqli_fetch_array($busca)){
    
?>

<form action="?pg=alterardb.faq" method="post">
<input type="hidden" name="id" value="<?=$dados['id'];?>"> 
    <div class="mb-3">
        <label>Dúvida</label>
        <input type="text" name="pergunta" class="form-control" value="<?=$dados['pergunta'];?>">
    </div>
    <div class="mb-3">
        <label>Resposta</label>
        <input type="text" name= "resposta" class="form-control"  value="<?=$dados['resposta'];?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>

<?php 
}
?>