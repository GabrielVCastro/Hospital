<?php 
	class Medico{
		public $id;
		public $nome;
		public $tel;
		public $data_nascimento;
		public $especialidade = array();
	

	public function verificar_lista(){
		if ((!isset($_SESSION['lista_medico'])) || (count($_SESSION['lista_medico'])==0)){
				$_SESSION['aviso'] = "Não há nenhum médico cadastrado ainda!";
			}else{
				$_SESSION['aviso']= null;
			}
	}


	public function cadastrar_medico($nome, $tel, $data){
		if (!isset($_SESSION['lista_medico'])) {
			$_SESSION['lista_medico'] = array();
		}

		if (!isset($_SESSION['contador_medico'])) {
			$_SESSION['contador_medico'] = 1;
		}

		$this->id = $_SESSION['contador_medico'];
		$this->nome = $nome;
		$this->tel = $tel;
		$this->data_nascimento = $data;
		$this->especialidade;

	}
	

	



}

?>