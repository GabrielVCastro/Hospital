<?php 
	session_start();
	include("classes/Especialidade.class.php");
	include("classes/Medico.class.php");
	$chave = false;
	if (!isset($_POST['selecao'])) {
		echo "n preenchido";
	}else{
		foreach ($_SESSION['lista_medico'] as $key => $item) {
			$temporario = unserialize($item);

			if ($temporario->id==$_POST['id']) {
				
				foreach ($temporario->especialidade as $value) {

					
					
					if ($value==$_POST['selecao']) {
						$chave = true;
						
					}
				}
				if (!$chave) {
					foreach ($_SESSION['lista_especialidade'] as $especialidade) {
						$temporario_2 = unserialize($especialidade);
						if ($temporario_2->id == $_POST['selecao']) {
							array_push($temporario->especialidade, $_POST['selecao']);
							$_SESSION['lista_medico'][$key] = serialize($temporario);
							$_SESSION['sucesso'] = "especialidade cadastrada com sucesso";

						}
					}
				}else{
					$_SESSION['erro'] = 'Especialidade já cadastrada a esse médico!';
				}
				
			}
			
		}
	}
	



header("Location: medico.php");
	
	
	


?>