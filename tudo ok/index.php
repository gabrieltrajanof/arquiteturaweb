<?php include "conecta.inc.php"; ?>

<link rel="stylesheet" href="style/menulateral.css"/>
<link rel="stylesheet" href="style/menu.css"/>
<link rel="stylesheet" href="style/faleconosco.css"/>

<?php
include_once("topo.php");
include_once("menu.php");
?>
<div class="body">
	
<?php
	# área de conteúdo
	if(empty($_SERVER["QUERY_STRING"])){
	        $var = "sobre.php";
	        include_once("paginas/$var");
	}else{
	        $pg = $_GET['pg'];
	        include_once("paginas/$pg.php");
	}
	?>
	</div>
<?php
include_once("rodape.php");
?>