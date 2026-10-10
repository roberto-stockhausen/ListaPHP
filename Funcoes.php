<?php

function calcularIMC($altura, $peso)
{
    if ($altura <= 0) {
        echo 'erro: altura não pode ser 0';
    }
    $imc = $peso / ($altura * $altura);
    if ($imc < 18.5) {
        $categoria = "Abaixo do peso";
    } elseif ($imc < 24.9) {
        $categoria = "Peso normal";
    } elseif ($imc < 29.9) {
        $categoria = "Sobrepeso";
    } else {
        $categoria = "Obesidade";
    }
    return[
        "imc" => $imc,
        "categoria" => $categoria
    ];
}
function validarEmail($email)
{
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    return "e-mail é válido!";
} else {
    return "e-mail é inválido.";
}
}
function gerarSenha($howBig)
{
    $password = "";
    $capitals = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $littleOnes = "abcdefghijklmnopqrstuvwxyz";
    $numbers = "1234567890";
    $special = "!@#$%&*()\/?";
    while ($howBig > 0) {
        $type = rand(0, 3);
        switch ($type) {
            case 0:
                $password .= str_shuffle($capitals)[0];
                break;
            case 1:
                $password .= str_shuffle($littleOnes)[0];
                break;
            case 2:
                $password .= str_shuffle($numbers)[0];
                break;
            case 3:
                $password .= str_shuffle($special)[0];
                break;
        }
        $howBig -= 1;
    }
    return $password;
};

function vogaisTexto($texto)
{
$textoTamanho = mb_strlen($texto);
$textoVogais = 0;
$counter = 0;
while ($counter < $textoTamanho)
    {
        if ($texto[$counter] == "a" or $texto[$counter] == "e" or $texto[$counter] == "i" or $texto[$counter] == "o" or $texto[$counter] == "u")
            {
                $textoVogais += 1;
            }
        $counter += 1;
    }
    return $textoVogais;
}
function inverterTexto($texto)
{
    $caracteres = preg_split('//u', $texto, -1, PREG_SPLIT_NO_EMPTY);
    $caracteresInvertidos = array_reverse($caracteres);
    $textoInvertido = implode('', $caracteresInvertidos);
    return $textoInvertido;
}

function calcularIdade($data)
{
  $data = explode("/", $data);
  $age = (date("dm", date("U", mktime(0, 0, 0, $data[0], $data[1], $data[2]))) > date("dm")
    ? ((date("Y") - $data[2]) - 1)
    : (date("Y") - $data[2]));
  echo "Idade:" . $age;
}

function converterMoeda($real)
{
    $dollar = 0.2*$real;
    $euro = 0.18*$real;
    return [
        "dollar" => $dollar,
        "euro" => $euro
    ];
}

function formatarTelefone($telefone){
        if(strlen($telefone) == 10){
            $novo = substr_replace($telefone, '(', 0, 0);
            $novo = substr_replace($novo, '9', 3, 0);
            $novo = substr_replace($novo, ')', 3, 0);
        }else{
            $novo = substr_replace($telefone, '(', 0, 0);
            $novo = substr_replace($novo, ')', 3, 0);
        }
        return $novo;
    }

function saudacoes($uncle_grandpa_mode)
{
date_default_timezone_set('America/Sao_Paulo');
$hora = date("H");
if ($uncle_grandpa_mode == true){return 'Bom dia!';}
else
{
if ($hora < 12){return 'Bom dia!';}
if ($hora >= 12 and $hora < 18){return 'Bom dia!';}
if ($hora >= 18){return 'Boa noite!';}
}
}

function validarSenha($senha)
{
$resultado = array(
    "0" => 0,
    "1" => 0,
    "2" => 0,
    "3" => 0,
    "4" => 0,
    "5" => 0
);
$resultado[0] = 0;
$resultado[1] = 0;
$resultado[2] = 0;
$resultado[3] = 0;
$resultado[4] = strlen($senha);
$resultado[5] = "placeholder";
$segurancaCounter = 0;

$counter = 0;
while($counter<$resultado[4])
{
if (ctype_upper($senha[$counter])){$resultado[0] = 1;}
if (ctype_lower($senha[$counter])){$resultado[1] = 1;}
if (is_numeric($senha[$counter])){$resultado[2] = 1;}
if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/',$senha[$counter])){$resultado[3] = 1;}
$counter += 1;
}
if ($resultado[0] >= 1)
{
$segurancaCounter += 1;
}
if ($resultado[1] >= 1)
{
$segurancaCounter += 1;
}
if ($resultado[2] >= 1)
{
$segurancaCounter += 1;  
}
if ($resultado[3] >= 1)
{
$segurancaCounter += 1;   
}
if ($resultado[4] >= 8)
{
$segurancaCounter += 1;   
}
echo $segurancaCounter;
switch($segurancaCounter)
{
case 0:
$resultado[5] = "Nula";
break;
case 1:
$resultado[5] = "Muito baixa";
break;
case 2:
$resultado[5] = "Baixa";
break;
case 3:
$resultado[5] = "Média";
break;
case 4:
$resultado[5] = "Alta";
break;
case 5:
$resultado[5] = "Muito alta";
break;
}
return $resultado[5];
}
?>