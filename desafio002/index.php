<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de Números</title>~
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com Números Aleatórios</h1>
        <p>Gerando um número aleatório entre 0 e 100...</p>
        <?php 
            echo "<p>O valor gerado foi <strong>" . rand(0, 100)."</strong></p>";        
        ?>
        <button type="button" onclick="window.location.reload()">🔄 Gerar outro</button>
    </section>
</body>
</html>
