<?php
session_start();
include("conexao.php");
if(empty($_SESSION['id'])){
    $_SESSION['msg'] = "Necessario fazer o login!";
	header("Location: login.php");
}

echo "Olá ".$_SESSION['nome'].", Bem vindo <br>";
echo "<a href='sair.php'>Sair</a>";