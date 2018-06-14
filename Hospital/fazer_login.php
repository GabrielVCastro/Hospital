<?php
 session_start();   
 $senha = md5($_POST['senha']);
 $senha_certa = md5("123");
if (($_POST['nome']=="adm@teste.com") && ($senha==$senha_certa)) {
	header("Location: Painel_adm.php");
	$_SESSION['logado'] = true;
}else{
	header("Location: login.php");
	$_SESSION['msg_erro'] = "Senha ou login incorreto!";

}



?>