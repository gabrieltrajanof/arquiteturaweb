<?php include "conecta.inc.php"; ?>
<html>
<head>
    <title>DiegoPorto.com</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"
	<script src="js/bootstrap.bundle.min.js"></script>>
</head>
<body>
	<?php
	include_once('topo.php');
	?>
	
	<div class='container'>
	<?php
	# área de conteúdo
	if(empty($_SERVER["QUERY_STRING"])){
	        $var = "principal.php";
	        include_once("$var");
	}else{
	        $pg = $_GET['pg'];
	        include_once("$pg.php");
	}
	?>
	</div>
	<?php
		include_once('rodape.php');
	?>
</body>
</html>