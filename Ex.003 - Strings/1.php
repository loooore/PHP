<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strings</title>
</head>
<body>
    <h1>Estudando Strings em PHP</h1>
    <p>Existem 4 tipos de strings:
        <ul>
            <li><strong>Double quoted</strong> - Aspas Duplas</li>
            <li><strong>Single quoted</strong> - Aspas Simples</li>
            <li><strong>Heredoc</strong></li>
            <li><strong>Nowdoc</strong></li>
        </ul>
    </p>
    <h3>Double quoted</h3>
    <p> 
        Exp.: "Curso" e "PHP" -- Se você quiser concatenar(juntar) as duas string usa-se o "." <br>
        Exp.: "Curso" . "PHP"
    </p>
    <?php 
        echo "Curso" . "PHP";
        echo "Utilizando unicode com aspas duplas: </br>" . "PHP \u{1f418}";
        echo "Utilizando unicode com aspas simples: " . 'PHP \u{1f418}';

        $nome = "lore";
        echo "<p> Olá $nome! (Aspas duplas) </br>";
        echo 'Olá $nome! (Aspas simples) - Estamos falando pro PHP que n precisa interpretar </p>';

        $nome2 = "Lorenzo";
        $snom = "Toledo";
        $apelido = "lore";
        echo "<p> $nome2 \"Humano\" $snom </p>";

        echo "<p>
            Sequencias de escape para aspas duplas --
            <ul> 
            <li> <strong>\\n</strong> - Nova linha </li>
            <li> <strong>\\t</strong> - Tabulação horizontal - tab </li>
            <li> <strong>\\\</strong> - Barra invertida </li>
            <li> <strong>\\$</strong> - Sinal de cifrão </li>
            <li> <strong>\\u{}</strong> - Codepoint Unicode </li>
            </ul> 
        </p>";

        echo "$nome2 \"$apelido\" $snom ";

        $curso = 'PHP';
        $ano = date('Y');
        echo "<h3> Heredoc </h3>";
        echo <<< Teste
            Olá galera!
                Tudo bem com vocês?
            Como esta sendo o estudo?
        Teste;
    ?>
</body>
</html>