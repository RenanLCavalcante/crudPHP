<?php

	require_once("../model/Cliente.class.php");
    require_once("../util/ConectaPDO.php");
    
	class ClienteDAO{
		function __construct(){}
		public function cadastra($objCliente){
			try{
				$conectaPDO = new ConectaPDO();
				$conexao = $conectaPDO->abreConexao();
				$sql = $conexao->prepare("INSERT INTO crudphp.cliente (cpf,nome,telefone,endereco) VALUES(:cpf,:nome,:telefone,:endereco);");
				$sql->bindValue(':cpf', $objCliente->getCpf());
				$sql->bindValue(':nome', $objCliente->getNome());
				$sql->bindValue(':telefone', $objCliente->getTelefone());
				$sql->bindValue(':endereco', $objCliente->getEndereco());
				$sql->execute();
				$conectaPDO->fechaConexao();
			}catch(Exception $e){
				echo "Erro ao tentar cadastrar.".$e->getMessage();
			}
		}
		
		public function lista(){
			try{
				$conectaPDO = new ConectaPDO();
				$conexao = $conectaPDO->abreConexao();
				$sql = $conexao->prepare("SELECT * FROM crudphp.cliente;");
				$sql->execute();
				$arrayClientes = array();
				for($i=0; $linha = $sql->fetch(PDO::FETCH_ASSOC); $i++){
					$cliente = new Cliente();
					$cliente->setId($linha['id']);
					$cliente->setNome($linha['nome']);
					$cliente->setCpf($linha['cpf']);
					$cliente->setTelefone($linha['telefone']);
					$cliente->setEndereco($linha['endereco']);
					$arrayClientes[$i]=$cliente;
				}
				$conectaPDO->fechaConexao();
				return $arrayClientes;
			}catch(Exception $e){
				echo "Erro ao tentar listar.".$e->getMessage();
			}
		}
	}
?>