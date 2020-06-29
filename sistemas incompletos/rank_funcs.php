<?php
/*
include('conexao.php');
$sql = 'SELECT FROM usuarios *';
$result_usuarios = mysqli_query($conn, $sql);
$scans = mysqli_fetch_array($result_usuarios);
foreach($scans as $pontos){
    if($pontos['p_post']>=12){
        $sql = 'INSERT INTO rankcaps (nomes) values ($pontos['nome'])';
        mysqli_query($conn, $sql);
        //desenvolver inserção por maior valor
    }
    if($pontos['p_leitura']>=12){
        $sql = 'INSERT INTO rankleitura (nomes) values ($pontos['nome'])';
        mysqli_query($conn, $sql);
        //desenvolver inserção por maior valor
    }
    if($pontos['p_acessos']>=250){
        $sql = 'INSERT INTO ranklink (nomes) values ($pontos['nome'])';
        mysqli_query($conn, $sql);
        //desenvolver inserção por maior valor
    }
}



//Funções de inserção de pontos
function xp_post ($scan){
    $sql = 'INSERT INTO $scan (p_post) value 3';
}
function xp_leitura ($scan){
    $sql = 'INSERT INTO $scan (p_leitura) value 1';
}
function xp_acessos ($scan){
    $sql = 'INSERT INTO $scan (p_acessos) value 1';

*/