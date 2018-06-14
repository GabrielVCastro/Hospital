<?php 
	include("classes/Quartos.class.php");
	session_start();

	$quarto = new Quarto();

	$quarto->cadastrar_quarto($_POST['quantidade']);
	if ($quarto->max_capacidade == 0) {
		$_SESSION['erro'] = "A quantidade minima de paciente é 1.";
		header("Location: form_quarto.php");
	}else{
		if($quarto->max_capacidade > 50){
			$_SESSION['erro'] = "A quantidade máxima de paciente é 50.";
			header("Location: form_quarto.php");

		}else{
			if (!isset($_SESSION['lista_quarto'])) {
					$_SESSION['lista_quarto'] = array();

				}
			array_push($_SESSION['lista_quarto'], serialize($quarto));
			$_SESSION['contador_quarto']++;
			$_SESSION['sucesso'] = "Quarto cadastrado com sucesso!";
			header("Location: form_quarto.php");


		}
	
	}



	

?>