<?php
	require_once 'conexao.php';
	$banco = new banco(); // $banco->query(""); $banco->assoc(""); $banco->numRows("");
	
	$arquivo = file("caminho_do_arquivo.txt");
	$separador = "|";
		
	for($i = 0; $i < count($arquivo); $i++) {
		$pedaco = explode($separador, $arquivo[$i]);
		if($i >= 1){ //define a partir de qual linha vai iniciar a leitura
			// para utilizar basta identificar o campo que quer utilizar ex: $pedaco[0], $pedaco[1]
		}
	}
?>