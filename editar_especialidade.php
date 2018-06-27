<?php 
session_start();
include("classes/Especialidade.class.php");

$especialidade = new  Especialidade();
 
$objeto  = $especialidade->editar_especialidade($_POST['id'], $_POST['nome'], $_POST['descricao']);

foreach ($_SESSION['lista_especialidade'] as $key => $item) {
	$temporario = unserialize($item);
	if ($temporario->nome==$objeto->nome) {
		$_SESSION['erro'] = "Especialidade já cadastrada!";
		

	}
	if ($temporario->id == $objeto->id) {
		$_SESSION['lista_especialidade'][$key] = serialize($objeto);
	}
}



header("Location: especialidade.php");

?>