<?php  
	session_start();
	include("classes/Medico.class.php");

	$medico = new Medico();

	$medico->cadastrar_medico($_POST['nome'], $_POST['tel'], $_POST['data'] );

	array_push($_SESSION['lista_medico'], serialize($medico));
	$_SESSION['contador_medico']++;
	$_SESSION['sucesso'] = "Médico cadastrado com sucesso!";

	

	header("Location: medico.php");


?>