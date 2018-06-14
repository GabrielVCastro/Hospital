<?php    
session_start();
include("classes/Quartos.class.php");

$quarto = new Quarto();
$quarto->excluir_quarto($_GET['id_quarto']);
header("Location: quarto.php");

?>