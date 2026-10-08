<?php

require_once __DIR__ . "/init.php";

if(empty($_POST['titulo'])){
    header("Location: cadastro.php?erro=nao_ha_titulo");
    exit;
}

if(empty($_POST['descricao'])){
    header("Location: cadastro.php?erro=nao_ha_descricao");
    exit;
}

if(empty($_POST['area'])){
    header("Location: cadastro.php?erro=nao_ha_area");
    exit;
}

if(empty($_POST['data'])){
    header("Location: cadastro.php?erro=nao_ha_data");
    exit;
}

$dataAtual = date('Y-m-d');
if($_POST['data'] < $dataAtual){
    header("Location: cadastro.php?erro=data_invalida");
    exit;
}

if(empty($_POST['inicio'])){
    header("Location: cadastro.php?erro=nao_ha_data_inicial");
    exit;
}

if(empty($_POST['fim'])){
    header("Location: cadastro.php?erro=nao_ha_data_final");
    exit;
}

if(empty($_POST['local'])){
    header("Location: cadastro.php?erro=nao_ha_local");
    exit;
}

if(empty($_POST['responsavel'])){
    header("Location: cadastro.php?erro=responsavel_nao_inserido");
    exit;
}

//Aqui, não validamos os dados. Esta é uma forma simplificada.
$_SESSION['eventos'][] = $_POST;

//Após adicionar na lista, é possível voltar para a página inicial.
header("Location: " . "index.php");
exit;
?>