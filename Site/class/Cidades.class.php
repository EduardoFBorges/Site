<?php
require_once ('../class/Conexao.class.php'); 
require_once ('../class/cadastro.php');

class Cidades {
	public $id;
	public $nome_Cidade;
	public $estado;
    public function __construct() {
        //
    }
 	public function Buscar(Cidades $cidade) {
        try {

        	$sql = "SELECT nome_Cidade, numero_Cidade FROM regiao_de_cidade";	
           
            $buscarcidade=$con->prepare($sql);
            $buscarcidade->execute();
            while($cidade = $buscarcidade->fecth(PDO::FETCH_OBJ)){

            	echo $linha["numero_Cidade"]."-".["nome_Cidade"];
            }
            		
			

        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar buscar as cidades!!";
            }
    }
		public function getNome_Cidade(){
			return $this->nome_Cidade;
		}

		public function setNome_Cidade($nome_Cidade){
			$this->nome_Cidade = $nome_Cidade; 
			return $this;
		}

		public function getId(){
			return $this->id
		}

		public function setId($id){
			$this->id = $id; 
			return $this;
		}

		public function getEstado(){
			return $this->estado;
		}

		public function setEstado($estado){
			$this->estado = $estado; 
			return $this;
		}
}