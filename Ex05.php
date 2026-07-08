<?php

$input = "O míssel sabe onde ele está a todos os momentos, pois o míssel sabe onde ele não está.";
$resultado = analisarTexto($input);

function analisarTexto($texto)
{
$textoTamanho = mb_strlen($texto);
$textoPalavras = 1; // O contador não conta a primeira palavra, então a variável ja começa como 1.
$textoVogais = 0;
$textoConsoantes = 0;
$counter = 0;
$textoArray = array_map('intval', str_split($texto)); // No final acabei não precisando desse cara
while ($counter < $textoTamanho)
    {
        if ($texto[$counter] == " ")
            {
                $textoPalavras += 1; // Cada espaço no texto = Uma palavra a mais.
            }
        if ($texto[$counter] == "a" or $texto[$counter] == "e" or $texto[$counter] == "i" or $texto[$counter] == "o" or $texto[$counter] == "u")
            {
                $textoVogais += 1;
            }
            else
            {
                $textoConsoantes += 1;
            }
        $counter += 1;
    }

    return [
        "Tamanho" => $textoTamanho,
        "Palavras" => $textoPalavras,
        "Vogais" => $textoVogais,
        "Consoantes" => $textoConsoantes
    ];
}

echo "Caracteres no texto: " . $resultado["Tamanho"] . "<br>";
echo "Quantidade de palavras: " . $resultado["Palavras"] . "<br>";
echo "Vogais: " . $resultado["Vogais"] . "<br>";
echo "Consoantes: " . $resultado["Consoantes"] . "<br>";
?>