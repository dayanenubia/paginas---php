<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="css/estiloform.css" rel="stylesheet" type="text/css" />
    <title>Verificador de Par ou Ímpar</title>
</head>
<body>
    <div id="tformulario">
        <h2>Verificador de Par ou Ímpar</h2>
        <form method="post">
            <label for="numero">Insira um número inteiro:</label>
            <input type="text" id="numero" name="numero">
            <button type="submit">Verificar</button>
    
            <?php
            // Verifica se o formulário foi submetido
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Obtém o número digitado pelo usuário
                $numero = $_POST["numero"];

                // Verifica se o número é um inteiro
                if (filter_var($numero, FILTER_VALIDATE_INT) !== false) {
                    // Verifica se o número é par ou ímpar
                    if ($numero % 2 == 0) {
                        echo "<p>O número $numero é par.</p>";
                    } else {
                        echo "<p>O número $numero é ímpar.</p>";
                    }
                } else {
                    echo "<p>Por favor, insira um número inteiro válido.</p>";
                }
            }
            ?>
        </form>
    </div>
    
</body>
</html>
