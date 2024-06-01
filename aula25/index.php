<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas do PHP</title>
</head>
<body>
    <?php 
        $res = abs(-500);
        echo "<p>A resposta é $res</p>";
        $res = base_convert(254, 10, 2);// (numero a ser convertido, base desse número, base para qual ele será convertido); 2 = binário, 8 = octal, 10 = decimal, 16 = hexadecimal
        echo "<p>A resposta é $res</p>";
        //cheil() arredonda pra cima, floor() arredonda pra baixo, round() arredondamento padrão matemático
        //hypot() informa dois catetos e ele retorna a hipotenusa
        $res = intdiv(5, 2);
        echo "<p>A resposta é $res</p>";
        $res = min(5,2, 4, 3, 1, 6, 7, 8, 9);
        echo "<p>A resposta é $res</p>";
        $res = max(5,2, 4, 3, 1, 6, 7, 8, 9);
        echo "<p>A resposta é $res</p>";
        $res = pi(); //$res = M_PI (constante)
        echo "<p>A resposta é $res</p>";
        $res = pow(5,2);//Perde a ordem de precedência em relação à **
        echo "<p>A resposta é $res</p>";
        //sin(), cos(), tan() para trigonométricas
        $res = sqrt(81);
        echo "<p>A resposta é $res</p>";
    ?>
</body>
</html>