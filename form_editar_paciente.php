<?php  
	include_once("header.php"); 
	include("classes/Paciente.class.php");
	include("classes/Medico.class.php");
	include("classes/Quartos.class.php");
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
<?php   
	
	foreach ($_SESSION['lista_paciente'] as $key => $item) {
		$temporario = unserialize($item);
		if ($temporario->id==$_GET['editar']) {
			$paciente = $temporario;
		}
	}
	
?>
	<div class="row">
		<div class="offset-lg-2 col-lg-1">
			<a href="paciente.php" title="" class="btn btn-warning btn-facebook" id="twitter">
			   Voltar &nbsp;<span><i class="fas fa-external-link-alt" ></i></span></a><br><br>
		</div>
	</div>

<div class="row">
			<div class="offset-lg-3 col-lg-6">
				<div class="caixa_paciente">
					<form action="editar_paciente.php" method="POST">
						
					
						<h2>Pacientes</h2>
						<label for="cnome" >Nome</label>
						<input type="text" class="form-control" name="nome" value="<?= $paciente->nome?>" id="id"   required><br>
						<label for="cquarto">Quarto</label>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
							   <label class="input-group-text" for="inputGroupSelect01" id="form_especialidade"><i class="far fa-address-card"></i></label>  
							</div>
							  <select class="custom-select" id="inputGroupSelect01" name="selecao" required >
							    <option  selected><?= $paciente->quarto ?></option>
							    <?php 
							    	 foreach ($_SESSION['lista_quarto'] as $key => $value_1) {
							    		  $temporario = unserialize($value_1); ?>
							    		<option value="<?= $temporario->id ?>"><?= $temporario->id ?></option>
							    	<?php } ?>
							    
							    
							    
							  </select>
						</div><br>

						<label for="cdata">Data de nascimento</label>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
							   <label class="input-group-text" for="inputGroupSelect01" id="form_especialidade"><i class="far fa-calendar-alt"></i></label>  
							</div>
							<input type="date" class="form-control"  value="<?= $paciente->data_nascimento ?>"name="date" required>
						</div><br>

						<label for="ccpf" >CPF</label>
						<input type="number" class="form-control" name="cpf" id="ccpf" value="<?= $paciente->cpf ?>" required><br>

						<label for="cmedico">Médico</label>
						<div class="input-group mb-3">
							<div class="input-group-prepend">
							   <label class="input-group-text" for="inputGroupSelect01" id="form_especialidade"><i class="fas fa-user-md"></i></label>  
							</div>
							  <select class="custom-select" id="inputGroupSelect01" name="selecao_medico" required >
							    <option value="<?php foreach ($_SESSION['lista_medico'] as $key => $item) {
							    	$temp = unserialize($item);
							    	if ($temp->id==$paciente->medico_id) {
							    	 	echo $temp->id;
							    	 } 
							    } ?>" ><?php foreach ($_SESSION['lista_medico'] as $key => $item) {
							    	$temp = unserialize($item);
							    	if ($temp->id==$paciente->medico_id) {
							    	 	echo $temp->nome;
							    	 } 
							    } ?></option>
							    <?php 
							    	 foreach ($_SESSION['lista_medico'] as $key => $value) {
							    		  $temporario = unserialize($value); ?>
							    		<option value="<?= $temporario->id ?>"><?= $temporario->nome ?></option>
							    	<?php } ?>
							    
							    
							    
							  </select>
						</div><br>
						<input type="hidden" name="id" value="<?= $paciente->id?>" >
						
						<button type="submit" class="btn btn-success btn-lg btn-block">Cadastrar</button>



					</form>


				</div>
			</div>	
		</div>



<?php  include_once("footer.php"); ?>