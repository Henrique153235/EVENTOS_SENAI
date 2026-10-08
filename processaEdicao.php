<?php

require_once __DIR__ . "/edicao.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $EventoAlterado = $_POST; //Formulário de alteração de evento + ID do evento
    $idEvento = $_POST['id'];

    $_SESSION['eventos'][$idEvento] = $EventoAlterado;
    header("Location: index.php");
    exit;
}

?>