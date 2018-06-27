<?php
 include_once("header.php");

 include("classes/Quartos.class.php");
 
?>
<?php if (!$_SESSION['logado']) { 
		header("Location: login.php");

 }else { ?>

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
          <a class="dropdown-item" href="especialidade.php">Especialidades</a>
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
	        <a class="nav-link disabled" href="painel_adm.php"><i class="fas fa-sign-out-alt"></i></a>
	     </li>
    </ul>

  </div>
</nav>
	 
	 

<?php  

$quarto = new Quarto();
$quarto->verificar_lista();
?>



         
	</nav>
<div class="container">
	<div class="row">
		<div class="col-lg-1">
			<a href="form_quarto.php" title="" class="btn btn-success btn-facebook" id="twitter">
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
			
			
			<table class="table table-hover">
			  <thead>
			    <tr>
			      <th scope="col">n°</th>
			      <th scope="col">Quarto</th>
			     
			      
			        <th scope="col">Max.paciente</th>
			        <th scope="col">Editar</th>
			        <th scope="col">excluir</th>

			        <th scope="col">

			      	
					</th>

			    </tr>
			  </thead>
			  <tbody>
			  <?php   foreach ($_SESSION['lista_quarto'] as $key => $value) { 
			  			$temporario = unserialize($value); ?>
						 
				   			
						<tr>
					      <th scope="row"><?= $temporario->id ?></th>
					      <td><a href="#">Ver Quarto</a></td>
					      <td><?= $temporario->max_capacidade ?></td>
					      <td><a href="http://localhost/Hospital/form_editar_quarto.php?id_quarto=<?= $key ?> "><i class="far fa-edit"></i></a></td>
					      <td><a href="http://localhost/Hospital/excluir_quarto.php?id_quarto=<?= $key ?>"><i class="far fa-trash-alt"></i></a></td>
					      

					     
					    </tr>
					
				  
			  <?php } ?>


			 </tbody>
			</table>	




	<?php }
		 

	 ?>
</div>

	<div class="container">
	
	</div> 



<?php include_once("footer.php"); ?>



 <?php } ?>
