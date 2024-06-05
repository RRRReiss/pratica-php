<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
            $reais = $_GET["valor"];
            $dolares = $reais/5.29;
            $reais = number_format($reais, 2,',','.');
            $dolares = number_format($dolares, 2,',','.');
            echo "<p>Seus R$  $reais equivalem a <strong>US$ $dolares</strong></p>";
            echo "<p>*<strong>Cotação fixa de R$ 5,29</strong> informada diretamente no código.</p>"
        ?>
        <button type="button" onclick="window.history.back();">Voltar</button>
    </section>
</body>
</html>
