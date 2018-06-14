<?php 
	class Especialidade{
		public $id;
		public $nome;
		public $descricao;


		public function verificar_especialidade(){
			if ((!isset($_SESSION['lista_especialidade'])) || (count($_SESSION['lista_especialidade'])==0)){
				$_SESSION['aviso'] = "Não há nenhuma especialidade cadastrada ainda!";
			}else{
				$_SESSION['aviso']= null;
			}
		}


		public function cadastrar_especialidade($nome, $descricao){

			if (!isset($_SESSION['lista_especialidade'])) {
				$_SESSION['lista_especialidade'] = array();

			}
			if(!isset($_SESSION['contador_especialidade'])){
				$_SESSION['contador_especialidade'] = 1;
			}

			$this->id = $_SESSION['contador_especialidade'];
			$this->nome = $nome;
			$this->descricao = $descricao;
		}

		public function editar_especialidade($id,$nome,$descricao){
			foreach ($_SESSION['lista_especialidade'] as $key => $value) {
				$temporario = unserialize($value);
				if ($temporario->id==$id) {
					$temporario->nome = $nome;
					$temporario->descricao = $descricao;
					return $temporario;
				}
			}
		}

		public function pegar_especialidade($id){
			foreach ($id as $item) {
				foreach ($_SESSION['lista_especialidade'] as $key => $value) {
					$temporario = unserialize($value);
					if ($item == $temporario->id) {
						if (!isset($lista)) {
							$lista = array();

						}

						array_push($lista, serialize($temporario));
					}
				}
			}
			

			return $lista;

		}
	}


		



?>