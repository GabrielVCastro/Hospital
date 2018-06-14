<?php 
 session_start();
 include("classes/Remedio.class.php");

 $remedio = new Remedio();

 $remedio->cadastrar_remedio($_POST['nome'], $_POST['formula'], $_POST['quantidade']);
 $chave = false;
 foreach ($_SESSION['lista_remedio'] as $key => $value) {
 	$temporario = unserialize($value);
 	if ($remedio->nome==$temporario->nome) {
 		$chave = true;
 		$_SESSION['aviso_remedio'] = "Essse nome de remédio já esta cadastrado no sistema.";
 	}
 }

 if (!$chave) {
 	array_push($_SESSION['lista_remedio'], serialize($remedio));
 	$_SESSION['contador_remedio']++;
 	$_SESSION['sucesso'] = 'Remédio cadastrado com sucesso!';

 }

 header("Location: remedio.php");


?>