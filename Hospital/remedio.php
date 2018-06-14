<?php 
	include_once("header.php"); 
	include("classes/Remedio.class.php");

	$remedio  = new Remedio();
	$remedio->verificar_lista();
?>
	
<?php if (!$_SESSION['logado']) { 
		header("Location: login.php");

 }else { ?>	
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
	          <a class="dropdown-item" href="especialidade.php">Especialidades</a>
	          <a class="dropdown-item" href="medico.php">Médico</a>
	          <a class="dropdown-item" href="paciente.php">Cadastrar Paciente</a>
	          
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="remedio.php">Remédios</a>
	        </div>
	      </li>
	     
	        <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Procurar " >
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
		    </form>
		     <li class="nav-item">
		        <a class="nav-link disabled" href="painel_adm.php"><i class="fas fa-sign-out-alt"></i></a>
		     </li>
	    </ul>

	  </div>
	</nav>

	
	<div class="container">
		<div class="row">
			<div class="col-lg-1">
				<a href="form_remedio.php" title="" class="btn btn-success  btn-facebook" id="twitter">
			        Novo &nbsp;<span><i class="fas fa-external-link-alt" ></i></span>
			    </a><br><br>
			</div>
			<div class=" col-lg-1">
				<a href="painel_adm.php" title="" class="btn btn-warning btn-facebook" id="twitter">
				   Voltar &nbsp;<span><i class="fas fa-external-link-alt" ></i></span>
				</a><br><br>
			</div>	
		</div>
		
		<?php if (isset($_SESSION['aviso'])) { ?>
				<div class="row">
					<div class="col-lg-12">
						<div class="alert alert-warning" role="alert">
						  <p><?= $_SESSION['aviso'] ?></p>
						</div>
					</div>
					
				</div>
				
	 	<?php }else{ ?>


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
				 <?php if (isset($_SESSION['aviso_remedio'])) { ?>
						<div class="row">
							<div class="col-lg-12">
								<div class="alert alert-warning" role="alert">
								 	<p><?= $_SESSION['aviso_remedio'] ?></p>
								</div>
							</div>
						</div>
					
				<?php }
					 $_SESSION['aviso_remedio']=null;

				?>

				
				<div class="row">
					<table class="table table-hover">
						<thead>
							<th>ID</th>
							<th>Nome</th>
							<th>Fórmula</th>
							<th>Estoque</th>
						</thead>
						<tbody>
							<?php 
							foreach ($_SESSION['lista_remedio'] as $key => $value) {
								$temporario = unserialize($value); ?>
								<tr>
									<td><?= $temporario->id ?></td>
									<td><?= $temporario->nome ?></td>
									<td><?= $temporario->formula ?></td>
									<td><?= $temporario->estoque ?></td>
							    </tr>
							<?php } ?>
						</tbody>
					</table>
				</div>





	 	<?php } ?>
	</div>

<?php include_once("footer.php"); ?>
<?php } ?>