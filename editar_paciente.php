<?php 
	session_start();
	include("classes/Paciente.class.php");


	$paciente = new Paciente();

 	$paciente->editar_paciente($_POST['nome'], $_POST['selecao'], $_POST['date'], $_POST['cpf'], $_POST['selecao_medico'], $_POST['id']);
 	$_SESSION['sucesso'] = "Paciente editar com sucesso!";
 	header("Location: paciente.php");

?>