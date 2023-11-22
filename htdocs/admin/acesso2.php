<?php

    include_once("config.inc.php");

    $login = $_POST['usuario'];
    $senha = md5($_POST['senha']);

        if ($login != "admin" && $senha != "senha"){
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