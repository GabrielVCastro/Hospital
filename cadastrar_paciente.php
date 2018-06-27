<?php    
	session_start();
	include("classes/Paciente.class.php");
	include("classes/Medico.class.php");

if ($_POST['selecao']==null){
	$_SESSION['msg_erro'] = "Selecione um quarto!";
	
}else{
	if ($_POST['selecao_medico']==null) {
		$_SESSION['msg_erro'] = "Selecione um medico!";
	}else{
	$paciente = new Paciente();
	$paciente->cadastrar_paciente($_POST['nome'], $_POST['selecao'], $_POST['date'], $_POST['cpf'], $_POST['selecao_medico']);
	$chave = false;

	foreach ($_SESSION['lista_paciente'] as $key => $value) {
		$temporario = unserialize($value);
		if ($temporario->cpf==$paciente->cpf) {
			$chave = true;
			$_SESSION['msg_erro'] = "Paciente já cadastrado!";

		}
	}
	if (!$chave ) {
		array_push($_SESSION['lista_paciente'], serialize($paciente));
		$_SESSION['contador_paciente']++;
		

	}

	header("Location: paciente.php");

	}
	
	
}

header($_SESSION['form_paciente.php']);


?>