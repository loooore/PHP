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
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php
            $numero = $_GET ["numero"] ?? "Sem número";
            echo "<p>O número escolhido foi <strong>$numero</strong></p>";
            echo "<p>O seu antecessor é <strong>" . $numero - 1 . "</strong></p>";
            echo "<p>O seu sucessor é <strong>" . $numero + 1 . "</strong></p>";
        ?>

        <p><a href="javascript:history.go(-1)">Voltar à página anterior!</a></p>
    </main>
</body>
</html>