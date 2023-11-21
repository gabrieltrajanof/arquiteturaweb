<?php
if(isset($_COOKIE['login'])){
    $usuario = $_COOKIE['login'];
}
if(isset($_COOKIE['senha'])){
    $senha = $_COOKIE['senha'];
}
if(!(empty($usuario) OR empty($senha))){
    $sql = "SELECT * FROM admin WHERE login = '$usuario' AND senha = '$senha'";
    $query = mysqli_query($conexao, $sql);
    $linhas = $query-> rows;

    if($linhas == 0){
        setcookie("login");
        setcookie("senha");
        echo "Login não efetuado.";
        echo "<a href=login.php> Clique para logar.</a>0";
        exit();
    }else{
        echo "Login não efetuado.";
        echo "<a href=login.php> Clique para logar.</a>0";
        exit();
    }
}

?>