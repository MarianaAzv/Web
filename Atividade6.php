<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    

    <form method="POST">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero = intval($_POST['numero']);

        if ($numero % 2 === 0) {
            $resultado = "Par";
        } else {
            $resultado = "Ímpar";
        }

        echo "<h2>Você digitou o número: <strong>$numero</strong></h2>";
        echo "<h2>Resultado: <strong>$resultado</strong></h2>";
    }
    ?>
</body>
</html>
