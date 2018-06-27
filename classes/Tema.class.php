<?php 
	class Tema{
		public $id;
		public $url;


		public function adicionar_tema_padrao(){
			if(!isset($_SESSION['lista_tema'])){
		 	$_SESSION['lista_tema'] = array(
		 			"0"=> "tema_1.png",
		 			"1"=>"tema_2.png",
		 			"2"=> "tema_3.png",
		 			"3"=>"tema_4.png"
		 	);


			}
			if(!isset($_SESSION['tema'])){
				$_SESSION['tema'] = $_SESSION['lista_tema'][0];
			}

		}

		public function alterar_tema(){
			
		}
	}



?>