<?php 
	class Paciente{
		public $id;
		public $nome;
		public $quarto;
		public $cpf;
		public $data_nascimento;
		public $medico_id;
		public $remedios = array();


		public function verificar_lista(){
				if ((!isset($_SESSION['lista_paciente'])) || (count($_SESSION['lista_paciente'])==0)){
					$_SESSION['aviso'] = "Não há nenhum paciente cadastrado ainda!";
				}else{
					$_SESSION['aviso']= null;
				}


			}


		public function cadastrar_paciente($nome, $selecao, $data, $cpf, $selecao_medico){
			if (!isset($_SESSION['lista_paciente'])) {
				$_SESSION['lista_paciente'] = array();

			}

			if (!isset($_SESSION['contador_paciente'])) {
				$_SESSION['contador_paciente'] = 1;
			}

			$this->id = $_SESSION['contador_paciente'];
			$this->nome = $nome;
			$this->quarto = $selecao;
			$this->cpf = $cpf;
			$this->data_nascimento = $data;
			$this->medico_id = $selecao_medico;
			
		}

		public function editar_paciente($nome, $selecao, $data, $cpf, $selecao_medico, $id){
			foreach ($_SESSION['lista_paciente'] as $key => $value) {
				$temporario = unserialize($value);
				if ($temporario->id==$id) {
					$temporario->nome = $nome;
					$temporario->quarto = $selecao;
					$temporario->data_nascimento = $data;
					$temporario->medico_id = $selecao_medico;
					$_SESSION['lista_paciente'][$key] = serialize($temporario);
					

				}

			}
		}


	}


?>