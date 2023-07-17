<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css">

    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php
        $nome = $_GET['nome'] ?? 'sem nome';
        $sobrenome = $_GET['sobrenome'] ?? 'desconhecido';

        echo "Nome: <strong>$nome</strong> <br> Sobrenome: <strong>$sobrenome</strong>";
        ?>

        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>

</html>