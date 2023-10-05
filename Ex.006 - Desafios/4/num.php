<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Analisador</title>
</head>
<body>
    <header><h1>Analisador de Número Real</h1></header>
    <main>
        <?php 
            if (isset ($_GET ["number"])) {
                $num = $_GET ["number"];

                echo sprintf("<p>Analisando o número <strong>%.3f</strong> informado pelo usuário:</p>", $num);    

                $int = (int) $num;
                $fra = $num - $int;

                echo sprintf("<ul><li>A parte inteira do número é: <strong>%.0f</strong></li>", $int);
                echo sprintf("<li>A parte fracionária do número é: <strong>%.3f</strong></li></ul>", $fra);
            } else {
                $num = 0;
                echo sprintf("<p>Analisando o número <strong>%.0f</strong> informado pelo usuário:</p>", $num); 
            }

            ?>
            <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>