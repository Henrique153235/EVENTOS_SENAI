<?php
require_once __DIR__ . "/init.php";

$EventoDetectado = false;
$EventoAtual = null;

if (isset($_GET['id'])) {
    //Como o ID do evento é detectado, é possível dizer que ele foi corretamente detectado e retirar a mensagem do HTML
    $EventoDetectado = true;
    //É lido o ID, e selecionado o evento correspondente
    $EventoAtual = $_SESSION['eventos'][$_GET['id']];
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição - SENAI Eventos</title>
    <link rel="stylesheet" href="./edicao.css">
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
            <a href='edicao.php?id={$chave}'>
                {$valor['titulo']}
            </a>    
        </li>";
        }
        ?>
    </ul>
    <?php if ($EventoDetectado): ?>
        <form action="processaEdicao.php" method="POST">
            <input type="text" name="id" id="id" value="<?= $_GET['id'] ?>" hidden>
            <div class="formulario">
                <div>
                    <label for="titulo">Titulo: </label>
                    <input type="text" name="titulo" id="titulo" placeholder="Insira o título aqui" value="<?= $EventoAtual['titulo'] ?>" required>
                </div>
                <br>
                <div>
                    <label for="descricao">Descrição: </label>
                    <input type="text" name="descricao" placeholder="Insira descrição aqui" id="descricao" value="<?= $EventoAtual['descricao'] ?>">
                </div>
                <br>
                <div class="categoria">
                    <label for="titulo">Área: </label>
                    <input type="text" name="area" id="area" placeholder="Digite a área desejada aqui" value="<?= $EventoAtual['area'] ?>" required>
                </div>
                <br>
                <div>
                    <label for="data">Data: </label>
                    <input type="date" name="data" id="data" value="<?= $EventoAtual['data'] ?>" required>
                </div>
                <br>
                <div>
                    <label for="local">Local: </label>
                    <input type="a" name="local" id="local" placeholder="Insira o endereço aqui (link)" value="<?= $EventoAtual['local'] ?>" required>
                </div>
                <br>
                <div>
                    <label for="inicio">Início do evento: </label>
                    <input type="time" name="inicio" id="inicio" placeholder="00:00" value="<?= $EventoAtual['inicio'] ?>" required>
                </div>
                <br>
                <div>
                    <label for="fim">Fim do evento: </label>
                    <input type="time" name="fim" id="fim" placeholder="00:00" value="<?= $EventoAtual['fim'] ?>" required>
                </div>
                <br>
                <div>
                    <label for="vagas">Local do evento: </label>
                    <input type="text" name="local" id="local" value="<?= $EventoAtual['local'] ?>" required>
                </div>
                <br>
                <div>
                    <label for="vagas">Responsável pelo evento: </label>
                    <input type="text" name="responsavel" id="responsavel" value="<?= $EventoAtual['responsavel'] ?>" required>
                </div>
                <div class="confirmar-adicao">
                    <button type="submit">Adicionar</button>
                </div>
                <div>
                    <button type="reset">Limpar</button>
                </div>
            </div>
        </form>
    <?php else: ?>
        <div class="nenhum-evento">
            <p>Nenhum evento selecionado.</p>
            <p>Por favor, selecione uma das opções acima;</p>
        </div>
    <?php endif; ?>
</body>

</html>