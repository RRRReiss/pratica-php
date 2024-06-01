<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de Strings com PHP</title>
</head>
<body>
    <h1>Testando Manipulação de Strings</h1>
    <?php 
        // $nome = 'Rafael';
        // $sobrenome = "Barcelos \u{1F480}";
        // echo "$nome $sobrenome";

        // const CANAL = "Curso em Vídeo \u{1F499}";
        // echo "Eu adoro o " . CANAL;

        // echo "Estamos no ano de " . date('Y');

        //Sequências de escapes para aspas duplas:
        //\n = Nova linha;
        //\t = Tabulação horizontal;
        //\\ = Barra invertida;
        //\$ = Sinal de cifrão;
        //\u{} = Codepoint Unicode;

        // $nome = "Rafael";
        // $sobrenome = "Barcelos";
        // $apelido = "Rafa";
        // $apelidoSimples = '"Rafa"';
        // echo "$nome $apelidoSimples $sobrenome";
        // echo "$nome \"$apelido\" $sobrenome";

        // $canal = "Curso em Vídeo";
        // $ano = date('Y');
        // echo <<< TESTE
        //     Olá galera do $canal!
        //             Tudo bem com vocês?
        //         Como está sendo esse ano de $ano?
        //     Abraços! \u{1F596}
        // TESTE;

        $canal = "Curso em Vídeo";
        $ano = date('Y');
        echo <<< 'TESTE'
             Olá galera do $canal!
                    Tudo bem com vocês?
                Como está sendo esse ano de $ano?
            Abraços! \u{1F596}
        TESTE;

    ?>
</body>
</html>
