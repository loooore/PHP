<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>resultado</title>
</head>
<body>
    <header>
        <h1>Trabalhando com números aleatórios</h1>
    </header>
    <main>
        <?php
            echo "<p>Gerando um número aleatório entre 0 e 100...</p>";
            $randomNum = random_int(0, 100);
            echo "<p>O valor gerado foi <strong>$randomNum</strong></p>";
        ?>
        <input type="submit" name="randomNum" id="idRandomNum" value="Gerar outro" onclick="window.location.reload()">
    </main>
</body>
</html>