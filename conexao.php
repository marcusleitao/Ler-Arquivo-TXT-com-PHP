<?php
	/* ESTE É UM FRAMEWORK SIMPLES DE CONEXAO E MANIPULAÇÃO DE BANCO DE DADOS, PENSADO PARA FACILITAR A VIDA DE QUEM PROGRAMA PHP EM CONJUNTO COM O MYSQL */
	class banco{
		
		private function conexao(){
			$servidor = "";
			$usuario = "";
			$senha = "";
			$banco = "";
			$conexao = mysqli_connect($servidor,$usuario,$senha,$banco);
			mysqli_query($conexao,"SET NAMES 'utf8'");
			mysqli_query($conexao,"SET character_set_connection=utf8");
			mysqli_query($conexao,"SET character_set_client=utf8");
			mysqli_query($conexao,"SET character_set_results=utf8");
			return $conexao;
		}
		
		public function query($query){
			$sql = mysqli_query($this->conexao(),$query);
			return $sql;
		}
		
		public function assoc($assoc){
			$sql = mysqli_fetch_assoc($assoc);
			return $sql;
		}
		
		public function numRows($numRows){
			$sql = mysqli_num_rows($numRows);
			return $sql;
		}
		
	}
?>