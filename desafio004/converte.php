<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio . '\'&@dataFinalCotacao=\'' . $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);

        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $reais = $_GET["valor"] ?? 0;
        $dolares = $reais / $cotacao;
        // $reais = number_format($reais, 2,',','.');
        // $dolares = number_format($dolares, 2,',','.');
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        // echo "<p>Seus R$  $reais equivalem a <strong>US$ $dolares</strong></p>";
        // echo "<p>*<strong>Cotação fixa de R$ 5,29</strong> informada diretamente no código.</p>"
        echo "<p>Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolares, "USD") . "</strong></p>";
        ?>
        <button type="button" onclick="window.history.back();">Voltar</button>
    </main>
</body>

</html>
