<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Reais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        <?php 
            $real = $_POST["real"] ?? 0;
            $inteiro = (int)$real;
            $fracionaria = $real - $inteiro;
            echo "<p>Analisando o número <strong>".number_format($real, 3, ',', '.')." </strong>informado pelo usuário:</p>";
            echo "<ul><li>A parte inteira do número é <strong>".number_format($inteiro, 0, '', '.')."</strong></li><li>A parte fracionário do número é <strong>".number_format($fracionaria, 3, ',', '.')."</strong></li></ul>";
        ?>
        <button type="button" onclick = "window.history.back();">Voltar</button>
    </main>
</body>
</html>
