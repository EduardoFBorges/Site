public function __construtor($razao_social, $fantasia, $cnpj, $logradouro, $numero, $bairro,
	$cep, $estado, $cidade, $telefone, $nome_contato, $email, $login, $senha, $confirmar_senha, 
	$privacidade){
		$this->razao_social 	= $razao_social;
		$this->fantasia     	= $fantasia;
		$this->cnpj				= $cnpj;
		$this->logradouro		= $logradouro;
		$this->numero			= $numero;	
		$this->bairro			= $bairro;
		$this->cep				= $cep;
		$this->estado			= $estado;	
		$this->cidade			= $cidade;
		$this->telefone			= $telefone;
		$this->nome_contato		= $nome_contato;
		$this->email			= $email;
		$this->login			= $login;
		$this->senha			= $senha;
		$this->confirmar_senha	= $confirmar_senha;
		$this->privacidade		= $privacidade;
	}

	value="<?= $razao_Social_Empresa; ?>"
	//funções
	//
	public function inserirEmpresa() {



	try{
	       	$con = new PDO("mysql:host=localhost;dbname=transportadora:charset=UTF8","root","");
		}//se nao gera erro.
		catch(PDOexception $e){
	   	 //reporta mensagem de erro caso nao conecta com o banco com o código do erro
	   	 echo "Erro encontrado ".$e->getMessage(). " com o código ".$e->getCode();
		}

		//Gravando no banco de dados !
		 try{
			$inserirEmpresa=$con->prepare("INSERT INTO empresa 
				VALUES(default,:razao_social, :fantasia, :cnpj, :logradouro, :numero, :bairro, :cep, :estado, :cidade, :telefone, :nome_contato, :email, :login, :senha, :confirmar_senha)");
			
		  //$inserirEmpresa->bindValue(":id",$id);
			$inserirEmpresa->execute();


			echo "Seu cadastro foi realizado com sucesso!";

		}catch(PDOexception $e){
		    //reporta mensagem de erro caso nao conecta com o banco com o código do erro
		    echo "Erro encontrado ".$e->getMessage(). " com o código ".$e->getCode();
		}

	}

}

[conexaooo]


<?php
	
	class Conexao {

		public $con;

		public function getCon(){
			return $this->con;
		}


		public function setCon($con){
			$this->con = $con; 
			return $this;
		}


		function __construtor(PDO $con) {
			$this->con = $con;
		}


		public function conectar(){

			try{
			   $con = new PDO("mysql:host=localhost;dbname=transportadora;charset=UTF8","root","");
			}catch(PDOexception $e){
			   
			    echo "Erro encontrado ".$e->getMessage(). " com o código ".$e->getCode();
			}		

		}


		public function desconectar(Conexao $con){
			unset($con);
		}

	}
?>




public static $instance;

    private function __construct() {
        //
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new PDO("mysql:host=localhost;dbname=transportadora;charset=UTF8","root","");
 			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }

        return self::$instance;
    }

}



public function Editar(Empresas $empresa) {
        try {
            $query = "UPDATE empresa set
				razao_Social_Empresa		:razao_Social_Empresa
				nome_Fantasia_Empresa		:nome_Fantasia_Empresa
				cnpj_Empresa				:cnpj_Empresa
				logradouro_Empresa			:logradouro_Empresa
				numero_Empresa				:numero_Empresa
				bairro_Empresa				:bairro_Empresa
				cep_Empresa					:cep_Empresa
				estado_Empresa				:estado_Empresa
				cidade_Empresa				:cidade_Empresa
				telefone_Empresa			:telefone_Empresa
				nome_contato_Empresa		:nome_contato_Empresa
				email_Empresa				:email_Empresa
				login_Empresa				:login_Empresa
				senha_Empresa				:senha_Empresa
				confirmar_senha_Empresa		:confirmar_senha_Empresa
                ";

            $alterar = Conexao::getInstance()->prepare($query);

            $alterar->bindValue(':razao_Social_Empresa',$empresa->getRazao_Social());
			$alterar->bindValue(':nome_Fantasia_Empresa',$empresa->getFantasia());
			$alterar->bindValue(':cnpj_Empresa',$empresa->getCnpj());	
			$alterar->bindValue(':logradouro_Empresa',$empresa->getLogradouro());
			$alterar->bindValue(':numero_Empresa',$empresa->getNumero());
			$alterar->bindValue(':bairro_Empresa',$empresa->getBairro());
			$alterar->bindValue(':cep_Empresa',$empresa->getCep());
			$alterar->bindValue(':estado_Empresa',$empresa->getEstado());
			$alterar->bindValue(':cidade_Empresa',$empresa->getCidade());
			$alterar->bindValue(':telefone_Empresa',$empresa->getFone());
			$alterar->bindValue(':nome_contato_Empresa',$empresa->getNome_contato());
			$alterar->bindValue(':email_Empresa',$empresa->getEmail());
			$alterar->bindValue(':login_Empresa',$empresa->getLogin());
			$alterar->bindValue(':senha_Empresa',$empresa->getSenha());
			$alterar->bindValue(':confirmar_senha_Empresa',$empresa->getConfirmar_senha());	

			return $alterar->execute();

        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 			um LOG do mesmo, tente novamente mais tarde.";
        //    GeraLog::getInstance()->inserirLog("Erro: Código: " . $e->
		//	getCode() . " Mensagem: " . $e->getMessage());
        }
    }

     <?php
    //    require_once ('../class/Conexao.class.php');
    //    require_once ('../class/Cidades.class.php');

    //    $con = new Conexao();
    //    $con->conectar($con);

    //    $cidade = new Cidades();
    //    $cidade->buscar($cidade);
    

   ?>