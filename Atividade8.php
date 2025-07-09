<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Analise de String</title>
</head>
<body>
    <form method="POST">
        <label for="texto">Digite  palavra:</label>
        <input type="text" id="tex" name="tex" required>

        <button type="submit">Click</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $p = $_POST['tex'];
        $pl = preg_replace('/[^a-zA-ZÀ-ÿ]/u', '', mb_strtolower($p));

      
        $tama = mb_strlen($p);

        if ($pl === strrev($pl)) {
            $palindromo = "Sim";
        } else {
            $palindromo = "Não";
        }
        
     

        $vogais = preg_match_all('/[aeiouáéíóúàèìòùãõâêîôû]/i', $p, $matchesVogais);
        if ($vogais > 0) {
            $qV = $vogais;
        } else {
            $qV = 0;
        }
        

        $consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $p, $matchesConsoantes);

        if ($consoantes > 0) {
            $qC = $consoantes;
        } else {
            $qC = 0;
        }
        
        
     

        echo "Resultado:";
        echo "Texto: $p";
        echo "Tamanho: $tama";
        echo "palíndromo: $palindromo";
        echo "Vogais: $qV";
        echo "Consoantes: $qC";
    }
    ?>
</body>
</html>
