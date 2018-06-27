<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head>
	<meta charset="UTF-8">
	<title>	Logar</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/estilo.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Nunito|Raleway|Titillium+Web" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	
<?php 
	
	session_start(); 

	include("classes/Tema.class.php");
 	$tema = new Tema();

 
 	$tema->adicionar_tema_padrao();
?>


	
	
</head >
<body style=" background:  url('assets/imagens/<?php echo $_SESSION['tema']?>') ; background-size: cover ;
background-repeat: ;


-webkit-background-size: cover; /* SAFARI / CHROME */

-moz-background-size: cover; /* FIREFOX */

-ms-background-size: cover; /* IE */

-o-background-size: cover; /* OPERA */">
