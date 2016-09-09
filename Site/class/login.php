<?php
	require_once ('../class/Conexao.class.php'); 
	require_once ('../class/Login.class.php');

		$nome = filter_input(INPUT_POST, "nome_Usuario_Cli", FILTER_SANITIZE_MAGIC_QUOTES);
		$senha = filter_input(INPUT_POST, "senha_CLi", FILTER_SANITIZE_MAGIC_QUOTES);

		$usuario = new Login();

		  $usuario->setNome_Usuario($nome);
		  $usuario->setSenha($senha);
		 
		  if($usuario->logarEmpresa()):
		  		header("Location: logado.php");    
		  	     
		  else:
		    $erro = "Erro ao Logar";	

	 	  endif;
	  
?>
	  <?php
	  	/*
 if(isset($_POST['enviar'])):			 ?>endif;
	          <meta http-equiv="refresh" content="1;URL=../logado.php"/> 
	      <?php

		 */

		?>





 

