<?php 
session_start();
include("classes/Paciente.class.php");

foreach ($_SESSION['lista_paciente'] as $key => $value) {
	$temporario = unserialize($value);
	if ($temporario->id==$_GET['excluir']) {
		unset($_SESSION['lista_paciente'][$key]);
	}
}

$_SESSION['sucesso_excluido'] = "Paciente excluido com sucesso!";
header("Location: paciente.php");


?>