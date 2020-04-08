<?php

function notification($tipo, $conexao) {
    $notificacao = [];
    foreach ($tipo as $valuer){
        $verifica_notificacao = "SELECT texto, imagem FROM notificacoes WHERE tipo='$valuer'";
        $resultado[] = mysqli_query($conexao, $verifica_notificacao);
        $notificacao[] = $resultado;
    }
    return $notificacao;
}