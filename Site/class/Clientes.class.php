<?php

require_once ('../class/Conexao.class.php'); 
require_once ('../class/cadastrar.php');

class Clientes extends Conexao {

	public $cnpj_CLi;
	public $razao_Social_CLi;
	public $nome_Fantasia_CLi;
	public $email_Cli;
	public $nome_Usuario_Cli;
	public $senha_Cli;		
	public $rua_Cli;
	public $numero_Cli;	
	public $bairro_CLi;
	public $fone_Cli;		
	public $fk_Cnpj_Centro_Dist;
	public $fk_Id_Cidade;			
	
	public function inserirCliente(Clientes $cliente){

		try{	
			//chama função conectar no banco
			$pdo = parent::getBD();

			$insere = $pdo->prepare("INSERT INTO cliente(
					cnpj_CLi,
					razao_Social_CLi,
					nome_Fantasia_CLi,
					email_Cli,
					nome_Usuario_Cli,
					senha_Cli,
					rua_Cli,
					numero_Cli,
					bairro_CLi,
					fone_Cli,
					fk_Cnpj_Centro_Dist,
					fk_Id_Cidade)
					VALUES
					(
					:cnpj_CLi,
					:razao_Social_CLi,
					:nome_Fantasia_CLi,
					:email_Cli,
					:nome_Usuario_Cli,
					:senha_Cli,
					:rua_Cli,
					:numero_Cli,
					:bairro_CLi,
					:fone_Cli,
					:fk_Cnpj_Centro_Dist,
					:fk_Id_Cidade)");

				//prepara os atributos com seus valores
					$insere->bindValue(':cnpj_CLi',$cliente->getCnpj());	
					$insere->bindValue(':razao_Social_CLi',$cliente->getRazao_Social());
					$insere->bindValue(':nome_Fantasia_CLi',$cliente->getFantasia());
					$insere->bindValue(':email_Cli',$cliente->getEmail());
					$insere->bindValue(':nome_Usuario_Cli',$cliente->getNome_Usuario());
					$insere->bindValue(':senha_Cli',$cliente->getSenha());						
					$insere->bindValue(':rua_Cli',$cliente->getRua());
					$insere->bindValue(':numero_Cli',$cliente->getNumero());
					$insere->bindValue(':bairro_CLi',$cliente->getBairro());					
					$insere->bindValue(':fone_Cli',$cliente->getFone());
					$insere->bindValue(':fk_Cnpj_Centro_Dist',$cliente->getFk_Cnpj_Centro_Dist());			
					$insere->bindValue(':fk_Id_Cidade',$cliente->getFk_Id_Cidade());					
					
					return $insere->execute();					
		}catch (Exception $e) {
		    print "Ocorreu um erro ao tentar cadastrar.";
		        }
	}

		//Get e Set dos atributos da classe Empresa

		public function getRazao_social(){
			return $this->razao_social_empresa;
		}

		public function setRazao_social($razao_social_empresa){
			$this->razao_social_empresa = $razao_social_empresa; 
			return $this;
		}

		public function getFantasia(){
			return $this->fantasia;
		}

		public function setFantasia($fantasia){
			$this->fantasia = $fantasia; 
			return $this;
		}

		public function getCnpj(){
			return $this->cnpj;
		}

		public function setCnpj($cnpj){
			$this->cnpj = $cnpj; 
			return $this;
		}

		public function getRua(){
			return $this->rua;
		}

		public function setRua($rua){
			$this->rua = $rua; 
			return $this;
		}

		public function getNumero(){
			return $this->numero;
		}

		public function setNumero($numero){
			$this->numero = $numero; 
			return $this;
		}

		public function getBairro(){
			return $this->bairro;
		}

		public function setBairro($bairro){
			$this->bairro = $bairro; 
			return $this;
		}

		public function getFone(){
			return $this->fone;
		}

		public function setFone($fone){
			$this->fone = $fone; 
			return $this;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setEmail($email){
			$this->email = $email; 
			return $this;
		}

		public function getNome_Usuario(){
			return $this->nome_Usuario_Cli;
		}

		public function setNome_Usuario($nome_Usuario_Cli){
			$this->nome_Usuario_Cli = $nome_Usuario_Cli; 
			return $this;
		}

		public function getSenha(){
			return $this->senha;
		}

		public function setSenha($senha){
			$this->senha = $senha; 
			return $this;
		}

		public function getFk_Cnpj_Centro_Dist(){
			return $this->fk_Cnpj_Centro_Dist;
		}

		public function setFk_Cnpj_Centro_Dist($fk_Cnpj_Centro_Dist){
			$this->fk_Cnpj_Centro_Dist = $fk_Cnpj_Centro_Dist; 
			return $this;
		}

		public function getFk_Id_Cidade(){
			return $this->fk_Id_Cidade;
		}

		public function setFk_Id_Cidade($fk_Id_Cidade){
			$this->fk_Id_Cidade = $fk_Id_Cidade; 
			return $this;
		}
}


		