<?php

$size = 12;

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

echo gerarSenha($size);
