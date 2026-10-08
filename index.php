<?php
require_once __DIR__ . '/init.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início - SENAI Eventos</title>
    <link rel="stylesheet" href="inicio.css">
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

    <section class="feed">
        <?php
        foreach ($_SESSION['eventos'] as $chave => $valor) {
            print "
            <article class='card-evento'>
            <h3>{$valor['titulo']}</h3>
            <p>{$valor['local']}</p>
            <p>{$valor['data']} | {$valor['inicio']} - {$valor['fim']}</p>
            <p><a href='detalhes.php?id={$chave}'>Saiba mais &rarr;</a></p>
            </article>
            ";
        }

        if (empty($_SESSION['eventos'])) {
            echo "Nenhum evento encontrado.";
        }

        ?>

    </section>

</body>

</html>