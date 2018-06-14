<?php 
	class Remedio{

		public $id;
		public $nome;
		public $formula;
		public $estoque;

		public function verificar_lista(){
			if ((!isset($_SESSION['lista_remedio'])) || (count($_SESSION['lista_remedio'])==0)){
				$_SESSION['aviso'] = "Não há nenhum rémedio cadastrado ainda!";
			}else{
				$_SESSION['aviso']= null;
			}
		}

		public function cadastrar_remedio($nome, $formula, $quantidade){


			if (!isset($_SESSION['lista_remedio'])) {
				$_SESSION['lista_remedio'] = array();

			}

			if (!isset($_SESSION['contador_remedio'])) {
				$_SESSION['contador_remedio'] = 1;

			}

			$this->id = $_SESSION['contador_remedio'];
			$this->nome = $nome;
			$this->formula = $formula;
			$this->estoque = $quantidade;

		}		

	}


?>