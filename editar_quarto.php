<?php  
session_start();
	include("classes/Quartos.class.php");
	
	$quarto = new Quarto();

	$quarto->editar_quarto($_POST['quantidade'],$_POST['id']);

	header("Location: quarto.php");	


?>