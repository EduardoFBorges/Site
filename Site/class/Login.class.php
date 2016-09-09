<?php
	class Login extends Conexao{
		
		public $nome_Usuario_Cli;
		public $senha_Cli;

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

		public function logarEmpresa(){

			try{

				$pdo = parent::getBD();

				$logar = $pdo->prepare("SELECT * FROM cliente WHERE nome_Usuario_Cli = ? AND senha_CLi = ?");

				$logar->bindValue(1, $this->getNome_Usuario());
				$logar->bindValue(2, $this->getSenha());
				
				$logar->execute();

				if($logar->rowCount() == 1):
					$dados = $logar->fetch(PDO::FETCH_OBJ);
					$_SESSION['cliente'] = $dados->nome_Fantasia_CLi;
					$_SESSION['logado'] = true;
					return true;
				else:
					return false;
				endif;

			}catch (Exception $e) {
		    		print "Ocorreu um erro ao tentar buscar.";
		    	}				
		}
}