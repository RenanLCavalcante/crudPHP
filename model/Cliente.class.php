<?php
	class Cliente{
		private $id;
		private $nome;
		private $cpf;
		private $telefone;
		private $endereco;
		
		function __construct(){}
		
		public function setId($id){
			$this->id = $id;
		}
		
		public function getId(){
			return $this->id;
		}
		
		public function setNome($nome){
			$this->nome = $nome;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function setCpf($cpf){
			$this->cpf = $cpf;
		}
		
		public function getCpf(){
			return $this->cpf;
		}
		
		public function setTelefone($telefone){
			$this->telefone = $telefone;
		}
		
		public function getTelefone(){
			return $this->telefone;
		}
		
		public function setEndereco($endereco){
			$this->endereco = $endereco;
		}
		
		public function getEndereco(){
			return $this->endereco;
		}
	}
?>