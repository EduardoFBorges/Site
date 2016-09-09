<?php
	class Conexao {

		const USER = "root";
		const PASS = "";
		
		private static $instance = null;

		private static function conectar(){
			try{
				if (self::$instance == null):
					$pdo = "mysql:host=localhost;dbname=transportadora";
					self::$instance = new PDO($pdo, self::USER, self::PASS);
					self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

				endif;
			}catch(PDOexception $e){
				echo "Erro: " . $e->getMessage();
			}
			return self::$instance;
		}

		protected static function getBD(){
			return self::conectar();
		}
}
		
		