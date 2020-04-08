<?php
session_start();
include("conexao.php");
include("notificador.php");
if(!empty($_SESSION['id'])){
	echo "Olá ".$_SESSION['nome'].", Bem vindo <br>";
	echo "<a href='sair.php'>Sair</a>";
}
$tipo = array(001);
/* os numeros acima serão referencia aos ID's dos mangas e os as notificações de sistema e de mensagens terão dois zeros e o digito indentificador*/
$notifica = notification($tipo, $conn);
//o valor retornado é uma matris x por 2 sendo a notificação um texto e uma imagem
foreach($notifica as $n){
    var_dump($n);
    /*foreach($n as $not){
        echo $not;
    }*/
}