<?php // require 'conexao/connection_pdo.php'; ?>
<?php 

// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$razao_social		= $_POST ["txtrazao_social"];	
$fantasia			= $_POST ["txtfantasia"];
$cnpj				= $_POST ["txtcnpj"];
$logradouro			= $_POST ["txtlogradouro"];
$numero				= $_POST ["txtnumero"];	
$bairro				= $_POST ["txtbairro"];
$cep				= $_POST ["txtcep"];	
$estado				= $_POST ["txtestado"];	
$cidade				= $_POST ["txtcidade"];	
$telefone			= $_POST ["txttelefone"];
$nome_contato 		= $_POST ["txtnome_contato"];	
$email				= $_POST ["txtemail"];	
$login				= $_POST ["txtlogin"];	
$senha				= $_POST ["txtsenha"];	
$confirmar_senha	= $_POST ["txtconfirmar_senha"];	
$privacidade		= $_POST ["txtprivacidade"];	


	try{
	   
	    $con = new PDO("mysql:host=localhost;dbname=transportadora","root","");
	}
	//se nao gera erro.
	catch(PDOexception $e){
	    //reporta mensagem de erro caso nao conecta com o banco com o código do erro
	    echo "Erro encontrado ".$e->getMessage(). " com o código ".$e->getCode();
	}

//Gravando no banco de dados !
	 try{
			$inserirEmpresa=$con->prepare("INSERT INTO empresa VALUES(default, '$razao_social', 								'$fantasia', '$cnpj', '$logradouro', '$numero', '$bairro', '$cep', '$estado', '$cidade', '$telefone', '$nome_contato', '$email', '$login', '$senha', '$confirmar_senha')");
		  //Faz tratamento dos dados + segurança.
		  //$inserirEmpresa->bindValue(":id",$id);
	
			//validar
			$validarEmpresa=$pdo->prepare("SELECT * FROM empresa WHERE cnpj=?");
			$validarEmpresa->execute(array($cnpj));
		
			if($validarEmpresa->rowCount() == 0):
				//executa cadastro	
				$inserirEmpresa->execute();
				echo "Seu cadastro foi realizado com sucesso!";
			else:
				echo "Já existe uma Empresa cadastrada o CNPJ informado";
			endif;

		}catch(PDOexception $e){
		    //reporta mensagem de erro caso nao conecta com o banco com o código do erro
		    echo "Erro encontrado ".$e->getMessage(). " com o código ".$e->getCode();
		}

?> 
