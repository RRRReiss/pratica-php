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
            $numero = $_GET["numero"];
            echo "<p>O número escolhido foi <strong>$numero</strong></p>";
            $antecessor = $numero - 1;
            echo "<p>O seu <i>antecessor</i> é $antecessor</p>";
            $sucessor = $numero + 1;
            echo "<p>O seu <i>sucessor</i> é $sucessor</p>";
        ?>
        <button type="button" onclick="JavaScript: window.history.back();">← Voltar</button>
    </main>
</body>
</html>