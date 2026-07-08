<?php

$origem = 1; // 0 = Ceusius; 1 = Fahrenheit; 2 = Kelvin;
$destino = 2; // 0 = Ceusius; 1 = Fahrenheit; 2 = Kelvin;
$input = 12;
$resultado = converterTemperatura($origem , $input, $destino);

function converterTemperatura($escalaInicio, $temperatura, $escalaFim)
{
$ceusius = 0;
$fahrenheit = 0;
$kelvin = 0;
$origemName = 0;
$destinoName = 0;
$output = 0;
switch($escalaInicio)
{
    case 0:
        $origemName = "Ceusius";
    break;
    case 1:
        $origemName = "Fahrenheit";
    break;
    case 2:
        $origemName = "Kelvin";
    break;
}
switch($escalaFim)
{
    case 0:
        $destinoName = "Ceusius";
    break;
    case 1:
        $destinoName = "Fahrenheit";
    break;
    case 2:
        $destinoName = "Kelvin";
    break;
}
switch($escalaInicio)
{
case 0:
$ceusius = $temperatura;
$fahrenheit = $temperatura * (9/5) + 32;
$kelvin = $temperatura + 273.15;
break;
case 1:
$ceusius = ($temperatura - 32) * (5/9);
$fahrenheit = $temperatura;
$kelvin = (($temperatura - 32) * (5/9)) + 273.15;
break;
case 2:
$ceusius = $temperatura -273.15;
$fahrenheit = ($temperatura - 273.15) * (9/5) + 32;
$kelvin = $temperatura;
break;
}

switch($escalaFim)
{
case 0:
$output = $ceusius;
break;
case 1:
$output = $fahrenheit;
break;
case 2:
$output = $kelvin;
break;
}

return[
    "escalaInicio" => $origemName,
    "escalaFim" => $destinoName,
    "output" => $output
];
}

echo "Entrada em " . $resultado["escalaInicio"] . ": " . $input . "<br>";
echo "Saída em " . $resultado["escalaFim"] . ": " . $resultado["output"] . "<br>";

?>