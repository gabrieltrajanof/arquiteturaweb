<?php
    include "../conecta.inc.php";


        
?>
        <?php
        include_once("topo.php");
        include_once("menu.php");
 
?>
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

        
   
    

