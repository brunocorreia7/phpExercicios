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
        <h1>Resultado</h1>
    </header>
    <main>
    <?php
function somar($n1, $n2) {
    return $n1 + $n2;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = ($_POST["n1"]) ?? '';
    $n2 = ($_POST["n2"]) ?? '';

    $s = somar($n1, $n2);
 
    echo "<p>a soma de <strong>$n1 mais $n2</strong> é igual a: <strong>$s</strong></p>";
    
}

?>
<p><a href="javascript:history.go(-1)">Voltar para pagina anterior</a></p>
    </main>
    
</body>
</html>



