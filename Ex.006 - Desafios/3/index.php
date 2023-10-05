<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title></title>
</head>
<body>
    <header>
        <h1>Conversor de Moedas</h1>
    </header>
    <section>
    <?php 
        $numMoney = $_GET ["numDinheiro"];
        $cotacao = $_GET ["cotacao"];
        $numMoney = $numMoney / $cotacao;
        $numMoney = round($numMoney);
        echo "<p>Seu Dinheiro convertido: <strong>US$ $numMoney</strong></p>"
    ?>
    </section>
</body>
</html>