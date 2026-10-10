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
    $quantidade = mb_strlen($texto);
    return [
        "invertido" => $textoInvertido,
        "quantidade" => $quantidade
    ];
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
echo saudacoes(true)

?>