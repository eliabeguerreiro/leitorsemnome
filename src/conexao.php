<?php

	$servidor = "localhost:3308";
	$usuario = "root";
	$senha = "";
	$dbname = "leitor";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname) or die ('Não houve conexao!');