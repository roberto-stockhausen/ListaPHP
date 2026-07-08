<?php

$input = 1620.50;
$resultado = calcularDesconto($input);

function calcularDesconto($preco)
{
$desconto = 1;
$percentage = "nenhum";
if ($preco > 100.00 and $preco < 500.00)
{
$desconto = 0.9;
$percentage = 10;
}
else if ($preco > 500.00 and $preco < 1000)
{
$desconto = 0.8;
$percentage = 20;
}
else if ($preco > 1000.00 )
{
$desconto = 0.7;
$percentage = 30;
}
$precoFinal = $preco*$desconto;
return[
    "precoOriginal" => $preco,
    "desconto" => $percentage,
    "precoFinal" => $precoFinal
];
}

echo "Preço original: " . $resultado["precoOriginal"] . "<br>";
echo "Desconto aplicado: " . $resultado["desconto"] . "%" . "<br>";
echo "Preço final: " . $resultado["precoFinal"] . "<br>";

?>