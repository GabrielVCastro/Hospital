<?php 
	session_start();
	include("classes/Especialidade.class.php");


	unset($_SESSION['lista_especialidade'][$_GET['id']]);
	$_SESSION['sucesso_excluido'] = "Especialidade excluida com sucesso!";
	header("Location: especialidade.php");

 	



?>