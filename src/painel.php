<?php
session_start();
include("conexao.php");
include("notificador.php");
if(!empty($_SESSION['id'])){
	echo "Olá ".$_SESSION['nome'].", Bem vindo <br>";
	echo "<a href='sair.php'>Sair</a>";
}
$tipo = array(1,2);
/* os numeros acima serão referencia aos ID's dos mangas |notificações de sistema e mensagens serão respectivamente os difitos 1 e 2*/
$notifica = notification($tipo, $conn);
//o valor retornado é uma matris x por 2 sendo a notificação um texto e uma imagem
foreach($notifica as $n){
    var_dump($n);
    /*foreach($n as $not){
        echo $not;
    }*/
}