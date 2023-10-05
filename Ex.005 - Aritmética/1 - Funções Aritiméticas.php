<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritiméticas</title>
</head>
<body>
    <?php 
        $r = abs(-500); // valor absoluto de 500 = 500 | Valor absoluto de -500 = 500 - basicamente módulo.
        echo "Valor absoluto de -500 = $r";

        $r1 = base_convert(254, 10, 8); // converte o valor 254 da base 10, para 376 da base 8
        $r2 = base_convert(10110110, 2, 16);
        $r3 = base_convert(10110110, 2, 10);
        echo "<p>$r1, $r2, $r3</p>";

        // Funções de arredondamento --> ceil() - arredonda para cima | floor() - arredonda para baixo | round() - arredondamento normal

        // Função que calcula a hipotenusa --> hypot()

        // Função que faz a divisão só da parte inteira --> intdiv()
        $d = 5 / 2;    
        echo "<p> Resultado: $d </p>";
        $d1 = 5 % 2;
        echo "<p> Resultado: $d1 </p>";
        $d2 = intdiv(5, 2); // só pega a parte inteira do resultado da divisão
        echo "<p> Resultado: $d2 </p>";

        // Função que mostra o valor mín. e máx. de um sequencia -->
        $m = min(5, 2, 4, 12342, 23, 2, 5, -123);
        echo "O maior valor é: $m</br>";
        echo "O menor valor é: $m";
        
        // Função para achar o valor de pi --> pi() ou a constante M_PI
        $p = pi();
        echo "<p>O valor de pi é: $p</br>";
        $p2 = M_PI;
        echo "O valor de pi é: $p2";

        // Funções trigonométricas: para calcular o sen, cos e tan --> sin(), cos() e tan().

        // Funções para calcular a raíz quadrada --> sqrt().
        $rq = sqrt(81);
        echo "<p>$rq </br>";

        $rq1 = 81 ** (1/2);
        echo "$rq1</p>";

        ?>
</body>
</html>