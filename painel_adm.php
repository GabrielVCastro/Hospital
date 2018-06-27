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
          <a class="dropdown-item" href="medico.php">Médicos</a>
          <a class="dropdown-item" href="#">Cadastrar Paciente</a>
          
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="remedio.php">Remédios</a>
        </div>
      </li>
     
        <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Procurar " >
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
	    </form>
	     <li class="nav-item">
	        <a class="nav-link disabled" href="login.php"><i class="fas fa-sign-out-alt"></i></a>
	     </li>
    </ul>

  </div>
</nav>
	 

      <?php if (isset($_SESSION['msg_erro'])) { ?>
          <div class="container">
            <div class="row">
              <div class="col-lg-12 ">
                <div class="alert alert-danger" role="alert">
                  <p><?= $_SESSION['msg_erro'] ?></p>
                </div>
              </div>
            </div>
          </div>
            
          
        
      <?php }
         $_SESSION['msg_erro']=null;

        

    
       ?>
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-4">
      <div class="caixa_painel ">
        <h2>Quartos</h2>
        <p>Quantidade:&nbsp;&nbsp;&nbsp;<?php 
        if (isset($_SESSION['lista_quarto'])) {
          echo count($_SESSION['lista_quarto']); 
        }else{
            echo 0;

        } ?>
        </p>
         <a href="form_quarto.php" title="" class="btn btn-success btm-lg btn-block btn-facebook" id="twitter">
         Novo &nbsp;<span><i class="fas fa-external-link-alt" ></i></span></a>
        
      </div>
    </div>

     <div class="col-lg-3  col-md-4">
      <div class="caixa_painel  ">
        <h2>Especialidades</h2>
        <p>Quantidade:&nbsp;&nbsp;&nbsp;<?php 
        if (isset($_SESSION['lista_especialidade'])) {
          echo count($_SESSION['lista_especialidade']); 
        }else{
            echo 0;

        } ?>
        </p>
         <a href="form_especialidade.php" title="" class="btn btn-success btm-lg btn-block btn-facebook" id="twitter">
         Novo &nbsp;<span><i class="fas fa-external-link-alt" ></i></span></a>
        
      </div>
    </div>
    
    <div class="col-lg-3 col-md-4">
      <div class="caixa_painel ">
        <h2>Médicos</h2>
        <p>Quantidade:&nbsp;&nbsp;&nbsp;<?php 
        if (isset($_SESSION['lista_medico'])) {
          echo count($_SESSION['lista_medico']); 
        }else{
            echo 0;

        } ?>
        </p>
         <a href="form_medico.php" title="" class="btn btn-success btm-lg btn-block btn-facebook" id="twitter">
         Novo &nbsp;<span><i class="fas fa-external-link-alt" ></i></span></a>
        
      </div>
    </div>

     <div class="col-lg-3  col-md-4">
      <div class="caixa_painel ">
        <h2>Rémedios</h2>
        <p>Quantidade:&nbsp;&nbsp;&nbsp;<?php 
        if (isset($_SESSION['lista_remedio'])) {
          echo count($_SESSION['lista_remedio']); 
        }else{
            echo 0;

        } ?>
        </p>
         <a href="form_remedio.php" title="" class="btn btn-success btm-lg btn-block btn-facebook" id="twitter">
         Novo &nbsp;<span><i class="fas fa-external-link-alt" ></i></span></a>
        
      </div>
    </div>

    <div class="offset-lg-3 col-lg-6  col-md-8">
      <div class="caixa_painel" id="paciente" >
        <h2 class="paciente">Pacientes</h2>
        <p class="paciente">Crianças: 0</p>
        <p class="paciente">Quantidade total:&nbsp;&nbsp;&nbsp;<?php 
        if (isset($_SESSION['lista_paciente'])) {
          echo count($_SESSION['lista_paciente']); 
        }else{
            echo 0;

        } ?>
        </p>
        
         <a href="form_paciente.php" title="" class="btn btn-success btm-lg btn-block btn-facebook" id="twitter">
         Novo &nbsp;<span><i class="fas fa-external-link-alt" ></i></span></a>
        
      </div>
    </div>
    
     
    
  </div>

</div>
         
	

	
	




<?php include_once("footer.php"); ?>



 <?php } ?>



