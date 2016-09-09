<?php require 'conexao/connection_pdo.php'; ?>

<?php 

 
 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !

$razao_social		= $_POST ["razao_social"];	
$fantasia			= $_POST ["fantasia"];
$cnpj				= $_POST ["cnpj"];
$logradouro			= $_POST ["logradouro"];
$numero				= $_POST ["numero"];	
$bairro				= $_POST ["bairro"];
$cep				= $_POST ["cep"];	
$estado				= $_POST ["estado"];	
$cidade				= $_POST ["cidade"];	
$telefone			= $_POST ["telfone"];
$nome_contato 		= $_POST ["nome_contato"];	
$email				= $_POST ["email"];	
$login				= $_POST ["login"];	
$senha				= $_POST ["senha"];	
$confirmar_senha	= $_POST ["confirmar_senha"];	
$privacidade		= $_POST ["privacidade"];	


//Gravando no banco de dados !
 

	$inserirEmpresa=$con->prepare("INSERT INTO empresa VALUES(default, 'Empresa Teste Ltda', 								'Empresa Teste', '1234.56789.0001-00', 'Rua da conquista',
								'10', 'Vila da Sorte', '14401100', 'São Paulo', 'Franca', '33335555', 'Eduardo', 'eduardo@empresateste.com',
								'teste', '123', '123');
	
	$inserirEmpresa->bindValue(":id",$id);
	$inserirEmpresa->execute();


echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";

?> 
