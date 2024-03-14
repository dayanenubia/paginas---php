<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/atividade6.css" rel="stylesheet" type="text/css" />
    <title>Tabuada Interativa</title>
</head>
<body>
    <div id="tformulario">
        <h2>Tabuada Interativa</h2>
        <form method="post">
            <label for="numero">Escolha um número de 1 a 10:</label>
            <input type="number" id="numero" name="numero" min="1" max="10">
            <div id="button-container">
                <input type="submit" value="Mostrar Tabuada">
            </div>
        
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Verifica se o número foi enviado
                if (isset($_POST["numero"])) {
                    $numero = $_POST["numero"];
                    echo "<h3>Tabuada do $numero</h3>";

                    // Loop para mostrar a tabuada
                    for ($i = 1; $i <= 10; $i++) {
                        echo "<p>$numero X $i = " . ($numero * $i) . "<br>";
                        echo "Porque $numero é somado $i vezes: ";
                        for ($j = 1; $j <= $i; $j++) {
                            echo $numero;
                            if ($j < $i) {
                                echo " + ";
                            }
                        }
                        echo " = " . ($numero * $i) . "</p>";
                    }
                } else {
                    echo "<p>Por favor, escolha um número de 1 a 10.</p>";
                }
            }
            ?>
            </form>
        </div>
</body>
</html>
