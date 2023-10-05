<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Conversor de Moedas Avançado</h1>
    </header>
    <main>
        <?php
            date:
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            
            cotacaoDolar:
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao'; // API - do Banco Central
            $dados = json_decode(file_get_contents($url), true); 
            $cotacao = $dados ["value"] [0] ["cotacaoCompra"];

            conversao:
            $money = $_GET ["money"];
            $money = $money / $cotacao;
            echo sprintf("<p>Seu dinheiro equivale a <strong>US$ %.2f</strong></p>", $money);
            echo "<pre>Cotação obtida diretamente do <strong>Banco Central do Brasil</strong></pre>";
        ?>
    </main>
</body>
</html>