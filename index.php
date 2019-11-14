<?php

require_once("config/conexao_bd.php");

$conexao = conecta_bd();

require_once("config/config_geral.php");

$pagina = 'inicio';

if(isset($_GET['pg'])){
    $pagina = $_GET['pg'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<!-- <link rel="stylesheet" type="text/css" href="./estilo.css"> -->
	<!-- Bootstrap core CSS -->
  <link href="dist/css/bootstrap.min.css" rel="stylesheet">

  <script src="dist/js/jquery_1.12.4.min.js"></script>
  
  <script src="dist/js/bootstrap.min.js"></script>

	<title>WebService</title>


</head>
<body>

	<!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="?pg=inicio">Teste Site</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="<?= ($pagina == 'inicio')?'active':'' ?>"><a href="?pg=inicio">Home</a></li>
            <li class="<?= ($pagina == 'cadastro')?'active':'' ?>"><a href="?pg=cadastro">Cadastro</a></li>
            <li class="<?= ($pagina == 'listar')?'active':'' ?>"><a href="?pg=listar">Listar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	<div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Site Teste</h1>
        <p>Este é meu site!!!</p>
      </div>

    <ol class="breadcrumb">
      <li class="active">Home</li>
    </ol>

    </div>

  <div class="container" style="width: 70%">

    <?php 

      include("paginas/".$pagina.".php"); 

    ?>

  </div>


</body>
</html>
