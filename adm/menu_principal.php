<?php
  session_start();
  if (!isset($_SESSION['id'])) {
    require_once('../includes/funcoes.php');
	$url = absolute_url();
	header("Location: $url");
	exit();
  }
  $titulo = "AlugMat - Menu Principal";
  include_once('../includes/cabecalho.php');

  echo "<h1>Logado!</h1>
  <p>Agora você está logado, {$_SESSION['nome']}!</p>
  <p><a href=\"logout.php\">Logout</a></p>";

  include_once('../includes/rodape.php');
	
?>
<h1> Menu principal </h1>