<?php
 include_once("header.php");
 include("classes/Especialidade.class.php");
 
?>
<?php if (!$_SESSION['logado']) { 
		header("Location: login.php");

 }else { 
 	if (!isset($_SESSION['lista_quarto'])) {
 		$_SESSION['msg_erro'] = "Cadastre ao menos um quarto!";
 		header("Location: painel_adm.php");
 		
 	}

 	?>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand" href="painel_adm.php"><img src="assets/imagens/logo.png" alt=""></a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	   
	    </ul>
	    <ul class="navbar-nav">
	    	<li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Cadastro
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="quarto.php">Quarto</a>
	          <a class="dropdown-item" href="medico.php">Médico</a>
	          <a class="dropdown-item" href="paciente.php">Cadastrar Paciente</a>
	          <a class="dropdown-item" href="especialidade.php">Especialidades</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="form_remedio.php">Remédios</a>
	        </div>
	      </li>
	     
	        <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Procurar " >
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
		    </form>
		     <li class="nav-item">
		        <a class="nav-link disabled" href="especialidade.php"><i class="fas fa-sign-out-alt"></i></a>
		     </li>
	    </ul>

	  </div>
	</nav>
	

<?php 
	$especialidade = new Especialidade();
	$especialidade->verificar_especialidade();


?>

<div class="container">
	
	


	<?php if (isset($_SESSION['erro'])) { ?>
			<div class="row">
				<div class="col-lg-12">
					<div class="alert alert-danger" role="alert">
					 	<p><?= $_SESSION['erro'] ?></p>
					</div>
				</div>
			</div>
		
	<?php }
		 $_SESSION['erro']=null;

	?>


	<?php if (isset($_SESSION['sucesso'])) { ?>
			<div class="row">
				<div class="col-lg-12">
					<div class="alert alert-success" role="alert">
					 	<p><?= $_SESSION['sucesso'] ?></p>
					</div>
				</div>
			</div>
		
	<?php }
		 $_SESSION['sucesso']=null;

	?>
	<div class="row">
		<div class="offset-lg-1 col-lg-1">
			<a href="especialidade.php" title="" class="btn btn-warning btn-facebook" id="twitter">
			   Voltar &nbsp;<span><i class="fas fa-external-link-alt" ></i></span></a><br><br>
		</div>
	</div>

	<div class="row">
		<div class="offset-lg-3 col-lg-6 caixa_especialidade">
			<form action="cadastrar_especialidade.php" method="POST">
				<h2>Especialidades do Hospital</h2>
				<label for="cnome">Especialidade</label>
				<input type="text" name="especialidade" id="cnome" class="form-control" required><br>	
				<label for="cdescricao">Descrição</label><br>	
				<textarea name="descricao" id="cdescricao"  rows="10" class="form-control" required></textarea><br><br>
				<button type="submit" class="btn btn-success btn-lg btn-block">cadastrar</button>
				
			</form>
		</div>
	</div>


</div>









<?php include_once("footer.php"); ?>



<?php } ?>	