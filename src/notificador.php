<?php

function notification($tipo, $conexao) {
    $notificacao = [];
    foreach ($tipo as $valuer){
        $verifica_notificacao = "SELECT texto, imagem FROM notificacoes WHERE tipo='$valuer'";
        $result = mysqli_query($conexao, $verifica_notificacao);
        $resultado[] = mysqli_fetch_assoc($result);
        $notificacao[] = $resultado;
    }
    return $notificacao;
}