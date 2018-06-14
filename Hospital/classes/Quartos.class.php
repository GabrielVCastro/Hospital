<?php 
	class Quarto{

		public $id;
		public $max_capacidade;

		public function verificar_lista(){
			if ((!isset($_SESSION['lista_quarto'])) || (count($_SESSION['lista_quarto'])==0)){
				$_SESSION['aviso'] = "Não há nenhum quarto cadastrado ainda!";
			}else{
				$_SESSION['aviso']= null;
			}
		}

		public function cadastrar_quarto($quantidade){
			
			if (!isset($_SESSION['contador_quarto'])) {
				$_SESSION['contador_quarto']=1;
			}
			
			
			$this->id = $_SESSION['contador_quarto'];
			$this->max_capacidade = $quantidade;


		}


		public function editar_quarto($quantidade,$id){
			$temporario = unserialize($_SESSION['lista_quarto'][$id]);
			$temporario->max_capacidade = $quantidade;
			$_SESSION['lista_quarto'][$id] = serialize($temporario);
		}

		public function excluir_quarto($id){
			unset($_SESSION['lista_quarto'][$id]);

		}



	}


?>