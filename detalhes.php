<?php

require_once __DIR__ . "/init.php";

$EventoId = $_GET['id'];

$EventoAtual = $_SESSION['eventos'][$EventoId];

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Evento - SENAI Eventos</title>
    <link rel="stylesheet" href="./detalhes.css">
</head>
<body>
    <header class="cabecalho">
        <div class="logo-slogan">
            <h1>SENAI Eventos</h1>
            <p>Todos os eventos do SENAI em um lugar só</p>
        </div>
        <div class="navegacao">
            <?php require_once __DIR__ . "/nav.php" ?>
        </div>
    </header>

    <div class="detalhes">
        <h3><?= $EventoAtual['titulo'] ?></h3>
        <div class="especificacoes">
            <p><?= $EventoAtual['descricao'] ?></p>
            <p>Área:
                <?= $EventoAtual['area'] ?>
            </p>
            <p>Local: 
                <a href="<?= $EventoAtual['local'] ?>">
                    <?= $EventoAtual['local'] ?>
                </a>
            </p>
            <p>Início:
                <?= $EventoAtual['inicio'] ?>
            </p>
            <p>Fim:
                <?= $EventoAtual['fim'] ?>
            </p>
            <p>Responsável pelo evento:
                <?= $EventoAtual['responsavel'] ?>
            </p>
        </div>
    </div>
</body>
</html>