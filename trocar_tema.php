<?php session_start();
	

	$_SESSION['tema'] = $_POST['tema'];	
	header("Location: login.php");



?>