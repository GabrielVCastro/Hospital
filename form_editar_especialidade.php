<?php 
	include_once("header.php"); 
	include("classes/Especialidade.class.php");

	$temporario = unserialize($_SESSION['lista_especialidade'][$_GET['id']]);

?>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="assets/imagens/logo.png" alt=""></a>
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
          <a class="dropdown-item" href="form_quarto.php">Quartos</a>
          <a class="dropdown-item" href="form_especialidade.php">Especialidades</a>
          <a class="dropdown-item" href="#">Médicos</a>
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
	        <a class="nav-link disabled" href="especialidade.php"><i class="fas fa-sign-out-alt"></i></a>
	     </li>
    </ul>

  </div>
</nav>


<div class="row">
		<div class="offset-lg-3 col-lg-6 caixa_especialidade">
			<form action="editar_especialidade.php" method="POST">
				<h2>Especialidades do Hospital</h2>
				<label for="cnome">Especialidade</label>
				<input type="text" name="nome" id="cnome" class="form-control" value="<?= $temporario->nome ?>" required><br>	
				<label for="cdescricao">Descrição</label><br>	
				<textarea name="descricao" id="cdescricao"  rows="10" class="form-control"  required><?= $temporario->descricao ?></textarea><br><br>
				<input type="hidden" name="id" value="<?= $temporario->id ?>">
				<button type="submit" class="btn btn-success btn-lg btn-block">cadastrar</button>
				
			</form>
		</div>
	</div>


<?php include_once("footer.php"); ?>