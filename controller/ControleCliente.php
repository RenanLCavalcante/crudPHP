<?php
    
	require_once("../model/Cliente.class.php");
	require_once("../dao/ClienteDAO.class.php");
	header("Content-type: text/html; charset=utf-8");
	
	$acao="";
	if(isset($_POST["acao"])){
		$acao = $_POST["acao"];
	}else{
		$acao = $_GET["acao"];
	}

	switch($acao){
		case 'Cadastrar':
			cadastrar();
			break;
		case 'Listar':
			listar();
			break;
		default:
			echo "opção não encontrada.";
			break;
	}

	function cadastrar(){
		$nome=$_POST["txtNome"];
		$cpf=$_POST["txtCpf"];
		$telefone=$_POST["txtTelefone"];
		$endereco=$_POST["txtEndereco"];
		
		$cliente = new Cliente();
		$cliente->setNome($nome);
		$cliente->setCpf($cpf);
		$cliente->setTelefone($telefone);
		$cliente->setEndereco($endereco);
		
		$clienteDAO = new ClienteDAO();
		$clienteDAO->cadastra($cliente);
		
		header("Location: ../sucesso.php");
	}

	function listar(){
		$clienteDAO = new ClienteDAO();
		$arrayClientes = $clienteDAO->lista();
		session_start();
		$_SESSION["listaClientes"]=$arrayClientes;
		header("Location: ../lista_clientes.php");
	}
?>