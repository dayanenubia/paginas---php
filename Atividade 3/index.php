<!DOCTYPE html>
<html>
<head>
    <title>Identificar o maior número</title>
</head>
<body>
    <h2>Identificar o maior número</h2>
    <form method="post">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required><br><br>
        
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required><br><br>
        
        <label for="num3">Número 3:</label>
        <input type="number" name="num3" id="num3" required><br><br>
        
        <input type="submit" name="submit" value="Identificar o maior número">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        $maior_numero = $num1;

        if ($num2 > $maior_numero) {
            $maior_numero = $num2;
        }

        if ($num3 > $maior_numero) {
            $maior_numero = $num3;
        }

        echo "<p>O maior número é $maior_numero</p>";
    }
    ?>
</body>
</html>
