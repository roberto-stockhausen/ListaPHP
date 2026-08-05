<?php

$input = "JoshuaDoBar1987<>$";
$output = analisarSenha($input);

function analisarSenha($senha){
$resultado[3];
$resultado[0] = function quantasMaiusculas($senha);
$resultado[1] = function quantasMinusculas($senha);
$resultado[2] = function quantosNumeros($senha);
$resultado[3] = function quantosEspecial($senha);
$segurancaCounter = 0;
$seguranca = "placeholder"
if $resultado[0] > 1
{
$segurancaCounter += 1
}
if $resultado[1] > 1
{
$segurancaCounter += 1
}
if $resultado[2] > 1
{
$segurancaCounter += 1    
}
if $resultado[3] > 1
{
$segurancaCounter += 1    
}
switch($segurancaCounter)
{
case 0:
$seguranca = "Nula"
break;
case 1:
$seguranca = "Baixa"
break;
case 2:
$seguranca = "Média"
break;
case 3:
$seguranca = "Alta"
break;
case 4:
$seguranca = "Muito alta"
break;
}
return[
    "maiusculas" => $resultado[0],
    "minusculas" => $resultado[1],
    "numeros" => $resultado[2],
    "especiais" => $resultado[3],
    "seguranca" => $seguranca
];
}
function quantasMaiusculas($senha){
$senhaTamanho = mb_strlen($senha);
$counter = 0
$resultado = 0
while $counter < $senhaTamanho
{
if ctype_upper($senha[$counter])
{
$resultado += 1;
}
$counter += 1;
}
return $resultado;
}

function quantasMinusculas($senha){
$senhaTamanho = mb_strlen($senha);
$counter = 0
$resultado = 0
while $counter < $senhaTamanho
{
if ctype_lower($senha[$counter])
{
$resultado += 1;
}
$counter += 1;
}
return $resultado;
}

function quantasMaiusculas($senha){
$senhaTamanho = mb_strlen($senha);
$counter = 0
$resultado = 0
while $counter < $senhaTamanho
{
if is_numeric($senha[$counter])
{
$resultado += 1;
}
$counter += 1;
}
return $resultado;
}

function quantasMaiusculas($senha){
$senhaTamanho = mb_strlen($senha);
$counter = 0
$resultado = 0
while $counter < $senhaTamanho
{
if preg_match($senha[$counter])
{
$resultado += 1;
}
$counter += 1;
}
return $resultado;
}

echo "Quantidade de maiúsculas: " . $ouput["maiusculas"] . "<br>";
echo "Quantidade de minusculas: " . $ouput["minusculas"] . "<br>";
echo "Quantidade de números: " . $ouput["numeros"] . "<br>";
echo "Quantidade de caracteres especiais: " . $ouput["especiais"] . "<br>";
echo "Segurança da senha: " . $ouput["seguranca"] . "<br>";

?>