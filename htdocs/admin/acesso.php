<?php

    include_once("config.inc.php");

    $login = $_POST['usuario'];
    //$entrar = $_POST['entrar'];
    $senha = md5($_POST['senha']);

    //if (isset($entrar)) {
       $sql = "SELECT * FROM admin WHERE login = '$login' AND senha = '$senha'" 
       or die("Não conectou.");

        $query = mysqli_query($conexao, $sql);
        $linhas = $query-> rows;

        //if (mysqli_num_rows($query)){
        if ($linhas == 0){
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos $login | $senha');window.location
            .href='login.php';</script>";
            die();
        }else{
            setcookie("login",$login);
            setcookie("senha",$senha);
            header("Location: index.php");
        }
    //}
?>