<?php  

require_once ('../class/Conexao.class.php'); 
require_once ('../class/Clientes.class.php');

  
 
  $cliente = new Clientes();

  $cliente->setCnpj($_POST['cnpj_CLi']);
  $cliente->setRazao_Social($_POST['razao_Social_CLi']);
  $cliente->setFantasia($_POST['nome_Fantasia_CLi']);
  $cliente->setEmail($_POST['email_CLi']);
  $cliente->setNome_Usuario($_POST['nome_Usuario_Cli']);
  $cliente->setSenha($_POST['senha_CLi']);  
  $cliente->setRua($_POST['rua_Cli']);
  $cliente->setNumero($_POST['numero_Cli']);
  $cliente->setBairro($_POST['bairro_CLi']);
  $cliente->setFone($_POST['fone_Cli']);
  $cliente->setFk_Cnpj_Centro_Dist($_POST['fk_Cnpj_Centro_Dist']);
  $cliente->setFk_Id_Cidade($_POST['fk_Id_Cidade']);
  


  if($cliente->inserirCliente($cliente)){
      echo "Cadastro realizado com sucesso!";
      ?>
          <meta http-equiv="refresh" content="1;URL=../index.html"/> 
      <?php
     
  }else{
    echo "Problema ao cadastrar!";
    ?>
         <!-- <meta http-equiv="refresh" content="1;URL=../404.html"/> -->
    <?php
  }
  
?>
 


