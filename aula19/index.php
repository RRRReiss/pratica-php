<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>

<body>
    <h1>Teste de Variáveis e de Constantes</h1>
    <?php
    //REGRAS
    //Variáveis sempre começam com o símbolo $
    //O segundo pode ser letra ou o símbolo _
    //Aceita caracteres [a-z], [A-Z], [0-9] e [_]
    //Aceita caracteres da tabela ASCII a partir de 128
    //Aceita caracteres acentuados como á, õ, ç
    //A linguagem é case sensitive em relação aos nomes
    //Nomes especiais como $this não podem ser usados

    //RECOMENDAÇÕES
    //Tente dar nomes claros e de fácil identificação
    //Evite nomes muito curtos ou muito longos
    //Defina um padrão e siga em todo o projeto
    //Para variáveis, dê preferências a letras minúsculas
    //Para constantes, dê preferências a letras maiúsculas
    //Use camelCase para métodos e atributos
    //Use SNAKE_CASE para nomear constantes
    $nome = "Rafael";
    $sobrenome = "Barcelos";
    const PAIS = "Brasil";
    echo "Muito prazer, $nome $sobrenome";

    $nome = "Luana";
    $sobrenome = "Cristina";
    echo " e $nome $sobrenome! Vocês moram no " . PAIS;

    $Nome = "Pedro";
    echo "<p> É verdade que seu nome é $Nome?</p>";

    $salário = 2500.75;
    echo "Seu salário é de R$ $salário";

    $valorµ = 200;
    echo "<p> O valor é igual a $valorµ no programa</p>";

    const _TX = 850;
    echo "Resultado = " . _TX;

    $nomeCompletoCliente = "Camel Case";
    $telefone_contato_fornecedor = "Snake Case";
    $nomecursosuperior = "";
    ?>
</body>

</html>
