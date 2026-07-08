<?php
// I hate camelCase I hate camelCase I hate camelCase I hate camelCase I hate camelCase 
// AlTerNaTiNgCAsE é infinitamente superior
function inverterTexto($texto)
{
    $caracteres = preg_split('//u', $texto, -1, PREG_SPLIT_NO_EMPTY);
    $caracteresInvertidos = array_reverse($caracteres);
    $textoInvertido = implode('', $caracteresInvertidos);
    $quantidade = mb_strlen($texto);
    return [
        "invertido" => $textoInvertido,
        "quantidade" => $quantidade
    ];
}

$input = "Joshua do Bar";
$resultado = inverterTexto($input);

echo "$input <br>";
echo $resultado["invertido"] . "<br>";
echo $resultado["quantidade"] . "<br>";
