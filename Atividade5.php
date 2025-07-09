<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>


    <form method="POST">
        <label for="min">Valor Mínimo:</label>
        <input type="number" id="min" name="min" required>

        <label for="max">Valor Máximo:</label>
        <input type="number" id="max" name="max" required>

        <button type="submit">Sortear</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $min = intval($_POST['min']);
        $max = intval($_POST['max']);

        if ($min > $max) {
            echo "<p style='color:red;'>Erro</p>";
        } else {
            $numeroSorteado = rand($min, $max);
            echo "<h2>Número sorteado: <strong>$numeroSorteado</strong></h2>";
        }
    }
    ?>
</body>
</html>
