<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>resultado</title>
</head>
<body>
    <header>
        <h1>Resultado Final</h1>
    </header>
    <main>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST["numero"] ?? '';
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "<p>O número escolhido foi <strong>$numero</strong> <br> seu antecessor é <strong>$antecessor</strong> <br> é seu sucessor é: <strong>$sucessor</strong></p>";

        }

        ?>
        <p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>

    </main>
    
</body>
</html>