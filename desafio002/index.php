<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Trabalhando com Números Aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php
        // rand() => 1951 -> Linear Congrential Generator (muito lento e inseguro)
        // mt_rand() => 1997 -> Marsenne Twister (4x mais rápido que o rand() e mais seguro)
        // A partir do PHP 7.1, rand() é um simples apontamento para o mt_rand()
        // random_int() gera números aleatórios criptograficamente seguros, porém é o mais lento dos três
        echo "<p>O valor gerado foi <strong>" . mt_rand(0, 100) . "</strong></p>";
        ?>
        <button type="button" onclick="window.location.reload()">&#x1F504; Gerar outro</button>
    </main>
</body>

</html>
