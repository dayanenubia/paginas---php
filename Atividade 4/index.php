<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/atividade4.css" rel="stylesheet" type="text/css" />
    <title>Calculadora de Fatorial</title>
</head>
<body>
    <div id="tformulario">
        <h2>Calculadora de Fatorial</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="numero">Digite um número inteiro:</label>
            <input type="number" name="numero" min="0" required>
            <div id="button-container">
                <input type="submit" name="submit" value="Calcular">
            </div>
        </form>

        <?php
            function calcularFatorial($numero) {
                if ($numero == 0 || $numero == 1) {
                    return 1;
                } else {
                    return $numero * calcularFatorial($numero - 1);
                }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero = $_POST["numero"];

                if (filter_var($numero, FILTER_VALIDATE_INT) && $numero >= 0) {
                    echo "<h3>O fatorial de $numero é: " . calcularFatorial($numero) . "</h3>";
                } else {
                    echo "<h3>Por favor, digite um número inteiro não negativo.</h3>";
                }
            }
        ?>
    </div>    
</body>
</html>
