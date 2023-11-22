<?php
    include "../conecta.inc.php";


        
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Diegoporto.com - Admin</title>

	<link href="css/bootstrap.min.css" rel="stylesheet"
	<script src="js/bootstrap.bundle.min.js"></script>>
</head>

<body>

    <!-- Navigation -->
    <header class=page-header>
        <center>
            <h1 style="background-color: #efefef">
                <img src="../img/logo.png">
            </h1>
        </center>
    </header>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Painel Admin </h1>
                    <ul class="nav">
                        <li class="nav-item">
                         <a class="nav-link" href="../index.php">HOME</a>
                        </li>
                        
                        <li class="nav-item">
                        <a class="nav-link" href="?pg=listar.frp">Listar Formulários </a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?pg=inserir.projeto">Inserir Novo Projeto</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="?pg=listar.projeto">Listar "projetos"</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?pg=inserir.contato">Inserir Novo contato</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="?pg=listar.contato">Listar "contato"</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?pg=inserir.sobre">Inserir Novo "Sobre"</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="?pg=listar.sobre">Listar "Sobre"</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?pg=inserir.faq">Inserir Novo "FAQ"</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="?pg=listar.faq">Listar "FAQ"</a>
                        </li>


                    </ul>
            </div>
        </div>
        <!-- /.row -->
        <hr>
        <!-- Content Row -->
        <?php
        // Declarando as variáveis de acesso as páginas
        $var = "admin/index.php";
        // o @ suprime avisos de erro do PHP.
        @$pg = $_GET['pg'];
    
        // Utilizando a variável Superglobal SERVER
        // Para testar se o parâmetro Query_String está
        // sendo utilizado.
    
        if(empty($_SERVER["QUERY_STRING"])) {
            
        } else {
            include("$pg.php");
        }
    ?>
        
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php


?>