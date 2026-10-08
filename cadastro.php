<?php
require_once __DIR__ . "/init.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Evento - SENAI Eventos</title>
    <link rel="stylesheet" href="./cadastro.css">
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

    <form action="processaCadastro.php" method="POST">
        <div class="formulario">
            <div>
                <label for="titulo">Titulo: </label>
                <input type="text" name="titulo" id="titulo" placeholder="Insira o título aqui" required>
            </div>
            <br>
            <div>
                <label for="descricao">Descrição: </label>
                <input type="text" name="descricao" placeholder="Insira descrição aqui" id="descricao">
            </div>
            <br>
            <div>
                <label for="area">Área: </label>
                <input type="text" name="area" id="area" placeholder="Insira o a área do evento aqui" required>
            </div>
            <div>
                <label for="data">Data: </label>
                <input type="date" name="data" id="data" required>
            </div>
            <br>
            <div>
                <label for="inicio">Inicio: </label>
                <input type="time" name="inicio" id="inicio" placeholder="00:00" required>
            </div>
            <br>
            <div>
                <label for="fim">Fim: </label>
                <input type="time" name="fim" id="fim" placeholder="00:00" required>
            </div>
            <br>
            <div>
                <label for="local">Local: </label>
                <input type="text" name="local" id="local" placeholder='"Laboratório 1"' required>
            </div>
            <br>
            <div>
                <label for="responsavel">Responsável: </label>
                <input type="text" name="responsavel" id="responsavel" required>
            </div>
            <div class="confirmar-adicao">
                <button type="submit">Cadastrar</button>
            </div>
            <div>
                <button type="reset">Reiniciar</button>
            </div>
        </div>
    </form>
</body>

</html>