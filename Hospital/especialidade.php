<?php  include_once("header.php"); 
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
          <a class="dropdown-item" href="quarto.php">Quartos</a>
          <a class="dropdown-item" href="especialidade.php.php">Especialidades</a>
          <a class="dropdown-item" href="medico.php">Médicos</a>
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
	        <a class="nav-link disabled" href="painel_adm.php"><i class="fas fa-sign-out-alt"></i></a>
	     </li>
    </ul>

  </div>
</nav>
<?php  
	$especialidade = new Especialidade();
	$especialidade->verificar_especialidade();
?>

<div class="container">
	<div class="row">
		<div class="col-lg-1">
			<a href="form_especialidade.php" title="" class="btn btn-success  btn-facebook" id="twitter">
	         Novo &nbsp;<span><i class="fas fa-external-link-alt" ></i></span></a><br><br>
		</div>
	
	
		<div class="col-lg-1">
			<a href="painel_adm.php" title="" class="btn btn-warning btn-facebook" id="twitter">
			   Voltar &nbsp;<span><i class="fas fa-external-link-alt" ></i></span></a><br><br>
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


		<?php if (isset($_SESSION['sucesso_excluido'])) { ?>
			<div class="row">
				<div class="col-lg-12">
					<div class="alert alert-success" role="alert">
					 	<p><?= $_SESSION['sucesso_excluido'] ?></p>
					</div>
				</div>
			</div>
		
	<?php }
		 $_SESSION['sucesso_excluido']=null;

	?>
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
			
			
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">n°</th>
			      <th scope="col">Especialidade</th>
			     
			      
			        
			        <th scope="col">Descrição</th>
			        <th scope="col">Editar</th>
			        <th scope="col">excluir</th>

			        <th scope="col">

			      	
					</th>

			    </tr>
			  </thead>
			  <tbody>
			  <?php   foreach ($_SESSION['lista_especialidade'] as $key => $value) { 
			  			$temporario = unserialize($value); 
			  			
			  			?>
						 
				   		
						<tr>
					      <td scope="row"><?= $temporario->id ?> </td>
					      <td><?= $temporario->nome ?></td>
					      <td><a href="#"><?php echo substr($temporario->descricao, 0,10) ?></a></td>
					      <td><a href="http://localhost/Hospital/form_editar_especialidade.php?id=<?= $key ?>"><i class="far fa-edit"></i></a></td>
					      <td><a href="http://localhost/Hospital/excluir_especialidade.php?id=<?= $key ?>"><i class="far fa-trash-alt"></i></a></td>
					      

					     
					    </tr>
					
				  
			  <?php }



			  ?>


			 </tbody>
			</table>	




	<?php }
		 

	 ?>
	 </div>

<?php  include_once("footer.php"); ?>
<?php } ?>