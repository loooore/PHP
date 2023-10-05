<?php 
    $num = 300;
    echo "<p>O valor da variável é $num</p>";

    /*
        0x = Hexadecimal;
        0b = Binário;
        0 = Octal;
    */
    $num1 = 0x1A;
    echo "<p>O valor da variável é $num1</p>";

    $v = 300;
    echo "<p>O var_dump vai escrever o valor da variável e o tipo primitivo dela!</p>";
    var_dump($v); // mostra o tipo da variável

    $num2 = 3e2; // 3x 10 ^ 2;
    echo "<p>O valor é: $num2</p>";

    $array = [4, 5.43, "lore", true];
    var_dump($array);

    class Pessoa {
        private string $nomePessoa;
    }
    $p = new Pessoa;
    var_dump($p);
?>
