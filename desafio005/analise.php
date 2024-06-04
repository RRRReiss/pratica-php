<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Reais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Analisador de Número Real</h1>
        <?php 
            $real = $_GET["real"];
            $inteiro = (int)$real;
            $fracionaria = $real - $inteiro;
            echo "<p>Analisando o número $real informado pelo usuário:</p>";
            echo "<ul><li>A parte inteira do número é $inteiro</li><li>A parte fracionário do número é $fracionaria</li></ul>";
        ?>
        <button type="button" onclick = "window.history.back();">Voltar</button>
    </section>
</body>
</html>