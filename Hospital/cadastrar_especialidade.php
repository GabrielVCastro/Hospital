<?php 
	session_start();
	include("classes/Especialidade.class.php");


	$especialidade = new Especialidade();

	$especialidade->cadastrar_especialidade($_POST['especialidade'], $_POST['descricao']);
	$chave = false;
	if (!isset($_SESSION['lista_especialidade'])) {
		$_SESSION['lista_especialidade'] = array();
			
	}

	
	

	
		foreach ($_SESSION['lista_especialidade'] as $item) {
			$temporario = unserialize($item);
			if ($temporario->nome==$especialidade->nome) {
				$_SESSION['erro'] = "Especialidade já cadastrada!";
				$chave = true;
				
				
				
			}
		}
if (!$chave) {
	array_push($_SESSION['lista_especialidade'], serialize($especialidade));
	$_SESSION['sucesso'] = "Especialidade cadastrada com sucesso!";
	$_SESSION['contador_especialidade']++;
	
}
		

	
header("Location: form_especialidade.php");



?>