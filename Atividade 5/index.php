<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/atividade5.css" rel="stylesheet" type="text/css" />
    <title>Verificador de Números Primos</title>
</head>
<body>
    <div id="tformulario">
        <h2>Verificador de Números Primos</h2>
        <form method="post" action="">
            <label for="numero">Digite um número inteiro positivo:</label>
            <input type="number" name="numero">
            <div id="button-container">
                <input type="submit" name="verificar" value="Verificar">
            </div>
            <p id="resultado">
                <?php
                // Função para verificar se um número é primo
                function isPrimo($num) {
                    if ($num <= 1) {
                        return false;
                    }
                    for ($i = 2; $i <= sqrt($num); $i++) {
                        if ($num % $i == 0) {
                            return false;
                        }
                    }
                    return true;
                }

                // Verifica se o formulário foi submetido
                if (isset($_POST['verificar'])) {
                    // Obtém o número digitado pelo usuário
                    $numero = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;

                    // Verifica se o número é primo
                    if (isPrimo($numero)) {
                        echo "O número $numero é primo.";
                    } else {
                        echo "O número $numero não é primo.";
                    }
                }
                ?>
            </p>
        </form>
    </div>
</body>
</html>
