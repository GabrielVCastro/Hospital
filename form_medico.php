<?php
 include_once("header.php");
 include("classes/Especialidade.class.php");

if (!$_SESSION['logado']) { 
	header("Location: login.php");

 }else{ 
 	if (!isset($_SESSION['lista_especialidade'])) {
 		$_SESSION['msg_erro'] = "Cadastre ao menos uma especialidade !";
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
	          <a class="dropdown-item" href="quarto.php">Add.Quarto</a>
	          <a class="dropdown-item" href="especialidade.php">Especialidades</a>
	          <a class="dropdown-item" href="medico.php">Médico</a>
	          <a class="dropdown-item" href="#">Cadastrar Paciente</a>
	          
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Remédios</a>
	        </div>
	      </li>
	     
	        <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Procurar " >
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
		    </form>
		     <li class="nav-item">
		        <a class="nav-link disabled" href="medico.php"><i class="fas fa-sign-out-alt"></i></a>
		     </li>
	    </ul>

	  </div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="offset-lg-1 col-lg-1">
				<a href="medico.php" title="" class="btn btn-warning btn-facebook" id="twitter">
				   Voltar &nbsp;<span><i class="fas fa-external-link-alt" ></i></span></a><br><br>
			</div>
		</div>
			
		<div class="row">

			<div class="offset-3 col-lg-6 caixa_medico">

				<form action="cadastrar_medico.php" method="POST">
					<h2>Cadastrar Médico no sistema</h2>
					 <label for="cnome">Nome</label>
					 <input type="text" name="nome" id="cnome" class="form-control" required><br>
					 <label for="celular">Número de contato</label>
					 <input type="tel" id="celular" name="tel" class="form-control"  required><br>
					 <label for="cdata">Data de nascimento</label>
					 <input type="date" name="data" id="cdata" class="form-control" required><br>




					 
					 <button type="submit" class="btn btn-success  btn-lg btn-block">Cadastrar</button> 
				 </form>
			</div>
		</div>
		
	</div>
	


	

<?php include_once("footer.php"); ?>	



<?php } ?>