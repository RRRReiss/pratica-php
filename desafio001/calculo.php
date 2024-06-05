<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php 
            $numero = $_GET["numero"] ?? 0;
            echo "<p>O número escolhido foi <strong>$numero</strong></p>";
            echo "<p>O seu <i>antecessor</i> é " . ($numero - 1) . "</p>";
            echo "<p>O seu <i>sucessor</i> é " . ($numero + 1) . "</p>";
        ?>
        <button type="button" onclick="window.history.back();">&#x2B05; Voltar</button>
    </main>
</body>
</html>