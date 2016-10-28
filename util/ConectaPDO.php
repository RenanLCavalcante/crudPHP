<?php
	class ConectaPDO{
		private $conexao;
		
		public function abreConexao(){
			try{
				$conexao = new PDO('pgsql:host=localhost;dbname=crudphp','postgres','05101996');
				return $conexao;
			}catch(PDOException $e){
				echo "Erro!".$e->getMessage();
				die();
			}
		}
		
		public function fechaConexao(){
			$conexao = null;
		}
	}
?>