<?php


 include_once("header.php");
 

 $_SESSION['logado'] = false;


?> 

		<div class="container">
			
			<div class="row">		

			<?php if (isset($_SESSION['msg_erro'])) { ?>
					
						<div class="col-lg-12 ">
							<div class="alert alert-danger" role="alert">
							 	<p><?= $_SESSION['msg_erro'] ?></p>
							</div>
						</div>
					
				
			<?php }
				 $_SESSION['msg_erro']=null;

				

		
			 ?>


			
			
				<div class="offset-lg-3 col-lg-6  offset-md-2 col-md-8 offset-sm-1 col-sm-10 col-xs-10  ">
					<div class="caixa_login">

						<form action="fazer_login.php" method="POST">
							<div class="imagem_login	">
								<img src="assets/imagens/logo.png" alt="">
							</div>
							
							
							<div class="input-group input-group-lg">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="inputGroup-sizing-lg"><i class="far fa-envelope"></i></span>
							  </div>
							  <input type="text" class="form-control teste" name="nome" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="E-mail">
							</div><br>


							<div class="input-group input-group-lg">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="inputGroup-sizing-lg"><i class="fas fa-key"></i></span>
							  </div>
							  <input type="password" class="form-control" name="senha" aria-label="Large" aria-describedby="inputGroup-sizing-sm" placeholder="Password">
							</div><br>

							<button class="btn btn-success btn-lg btn-block">Login</button>
							
						</form>
						<button type="button" class="btn btn-primary btm-lg btn-block" data-toggle="modal" data-target="#exampleModal">
						  <p><i class="fas fa-edit"></i>&nbsp;Editar tema</p>
						</button>
						<div class="row">
							<div class="col-lg-6">
								<a href="#" title="" class="btn btn-primary btn-facebook" id="facebook">
								    <span><i class="fab fa-facebook-square"></i></span> Login with facebook
								</a>
							</div>
							<div class="col-lg-6">
								<a href="#" title="" class="btn btn-primary btn-facebook" id="twitter">
								    <span><i class="fab fa-twitter"></i></span> Login with twitter
								</a>
							</div>
							<div class="  col-lg-12">
								<a href="#" title="" class="btn btn-danger btn-facebook" id="twitter">
								    <span><i class="fab fa-google-plus-g"></i></span> Login with gmail
								</a>
							</div>
						</div>
						
						

						<!-- Modal -->
						<div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog modal-lg" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						    <form action="trocar_tema.php" method="POST">
						      	
								<div class="modal-body">
									<div class="row">
										<?php 
											foreach ($_SESSION['lista_tema'] as $key => $imagem) {?>
												<div class="col-lg-6 ">
												 
													<input type="radio" id="cradio_<?= $key ?>" name="tema" value="<?php echo $imagem ?>"><br>
												<label for="cradio_<?= $key++ ?>">
											       	<img src="assets/imagens/<?= $imagem ?>"  alt="">
										       </label>
												
												
											</div>
											<?php }


										?>
											
											
									</div>  
							    </div>
							       <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						        <button type="submit" class="btn btn-primary">Save changes</button>
						      </div>
						    </form>
						      
			        	      

						      
						   
						    </div>
						  </div>
						</div>
						<br>
						
						
						<p id="recuperar"><a href="#">Esqueceu a senha? Recuperar senha!</a></p>
					</div>
					
					
					
				</div>
			</div>
		</div>

<?php include_once("footer.php"); ?>


	