<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Número Aleatorio</title>
</head>
<body>
    <header>
        
    </header>
    <section>
        <form method="post" action="#">
            <h1>Trabalhando com números aleatórios</h1>
            
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") { 
       
            $numero = rand(1, 100);
            echo "Gerando um número aleatório entre 0 e 100...";
            echo "<p>Número sorteado: <strong>$numero</strong></p>";
            
    }

        ?>
        <input type="submit" value="Gerar outro">
        </form>
    </section>
   
    
</body>
</html>