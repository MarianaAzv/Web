<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Analise de String</title>
</head>
<body>
    <form method="POST">
        <label for="texto">Digite uma palavra:</label>
        <input type="text" id="tex" name="tex" required>

        <button type="submit">Analisar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $texto = $_POST['tex'];
        $textoLimpo = preg_replace('/[^a-zA-ZÀ-ÿ]/u', '', mb_strtolower($texto));

      
        $tama = mb_strlen($texto);

        $palindromo = $textoLimpo === strrev($textoLimpo) ? "Sim" : "Não";

        $vogais = preg_match_all('/[aeiouáéíóúàèìòùãõâêîôû]/i', $texto, $matchesVogais);
        $qtdVogais = $vogais ? $vogais : 0;

        $consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $texto, $matchesConsoantes);
        $qtdConsoantes = $consoantes ? $consoantes : 0;

        echo "Resultado:";
        echo "Texto informado: $texto";
        echo "Tamanho: $tama";
        echo "É palíndromo? $palindromo";
        echo "Quantidade de vogais: $qtdVogais";
        echo "Quantidade de consoantes: $qtdConsoantes";
    }
    ?>
</body>
</html>
