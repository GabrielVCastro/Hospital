<?php 
	include_once("header.php");
	include("classes/Paciente.class.php");
	include("classes/Medico.class.php");


	$paciente = new Paciente();
	$paciente->verificar_lista();
	$data =  date('d/m');
	$data_certa_atual =  date('d/m', strtotime($data));

 ?>

<?php if (!$_SESSION['logado']) { 
		$_SESSION['msg_erro'] = "Faça login antes!";
		header("Location: login.php");

 }else { 
 	if (!isset($_SESSION['lista_remedio'])) {
 		$_SESSION['msg_erro'] = "Cadastre os requisitos do hospital antes de cadastrar algum paciente!";
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
          <a class="dropdown-item" href="quarto.php">Quartos</a>
          <a class="dropdown-item" href="especialidade.php.php">Especialidades</a>
          <a class="dropdown-item" href="medico.php">Médicos</a>
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
				<a href="form_paciente.php" title="" class="btn btn-success  btn-facebook" id="twitter">
			        Novo &nbsp;<span><i class="fas fa-external-link-alt" ></i></span>
			    </a><br><br>
			</div>
			<div class="col-lg-1">
				<a href="painel_adm.php" title="" class="btn btn-warning btn-facebook" id="twitter">
				   Voltar &nbsp;<span><i class="fas fa-external-link-alt" ></i></span>
				</a><br><br>

			</div>

		</div>

	
<?php if (isset($_SESSION['aviso'])) { ?>
	<div class="row">
		<div class="col-12">
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
		<div class="row">
			<table class="table table-hover">
				<thead>
					<th>N°</th>
					<th>Nome</th>
					<th>N°-QUARTO</th>
					<th>Médico</th>
					<th>CPF</th>
					<th>Data nascimento</th>
					<th><i class="fas fa-user-edit"></i></th>
					<th><i class="fas fa-trash-alt"></i></th>
				</thead>
				<tbody>
					<?php foreach ($_SESSION['lista_paciente'] as $key => $value) {
						$temporario = unserialize($value); ?>
						<tr>
							<td><?= $temporario->id ?></td>
							<td><?= $temporario->nome?></td>
							<td><?= $temporario->quarto ?></td>
							<?php foreach ($_SESSION['lista_medico'] as  $item) {
								$temporario_medico = unserialize($item);
								if ($temporario_medico->id==$temporario->medico_id) { ?>
									<td><?= $temporario_medico->nome ?></td>
								<?php  }
							} ?>
							<td><?= $temporario->cpf ?></td>
							<td><?php 
									echo $data = date('d/m/Y', strtotime($temporario->data_nascimento)); 
									if (substr($data, 0, 5)==date('d/m')) { ?>
										 <i class="fas fa-birthday-cake"></i>
									<?php }
								?>
								</td>
							<td><a href="http://localhost/Hospital/form_editar_paciente.php?editar=<?= $temporario->id ?>"><i class="fas fa-pencil-alt"></i></a></td>
							<td>

								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
								 <i class="fas fa-times"></i>
								</button>

								<!-- Modal -->
								<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
								       <p>Tem certeza que deseja excluir esse paciente definitivamente ?</p>
								      </div>
								      <div class="modal-footer">
								        
								        
								        <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
								        <a href="http://localhost/Hospital/excluir_paciente.php?excluir=<?= $temporario->id ?>" class="btn btn-primary">Save changes</a>
								      </div>
								    </div>
								  </div>
								</div>

								<a href=""></a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
<?php } ?>

</div>
 <?php } ?>
 <?php  include_once("footer.php") ?>
