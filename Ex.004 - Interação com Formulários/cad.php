<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            // var_dump($_REQUEST); --> Junção do $_GET, $_POST E $_COOKIES
            $nome = $_GET ["nome"] ?? "Sem nome";
            $sobrenome = $_GET ["sobrenome"] ?? " Desconhecido";
            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome!</strong> </br> Bem-vindo ao meu site :D </p>";
        ?>

        <p><a href="javascript:history.go(-1)">Voltar à página anterior</a></p>
    </main>
</body>
</html>