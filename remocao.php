<?php
    require_once __DIR__ . "/init.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remoção - SENAI Eventos</title>
    <link rel="stylesheet" href="./estilizacoes/main.css">
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
    <?php require_once __DIR__ . "/nav.php" ?>

    <ul class="evento-original">
        <?php
        foreach ($_SESSION['eventos'] as $chave => $valor) {
            print "<li>
            <a href='remocao.php?id={$chave}'>
                {$valor['titulo']}
            </a>    
        </li>";
        }
        ?>
    </ul>
    <?php if (isset($_GET['id'])): ?>
        <?php
        $id = $_GET['id'];
        $EventoAtual = $_SESSION['eventos'][$id];
        ?>
        <h2>Deseja excluir este evento?</h2>
        <p>
            <strong><?= $EventoAtual['titulo'] ?></strong>
        </p>

        <form action="processaRemocao.php" method="POST">

            <input type="hidden" name="id" value="<?= $id ?>">

            <button type="submit">Remover Evento</button>


        </form>

        <form action="processaCancelamento.php" method="POST">
            <input type="hidden" name="id" value="<?= $id ?>">
            <button type="link">Cancelar</button>
        </form>
    <?php else: ?>
        <div class="nenhum-evento">
            <p>Nenhum evento selecionado.</p>
            <p>Por favor, selecione uma das opções acima;</p>
        </div>
    <?php endif; ?>
</body>

</html>