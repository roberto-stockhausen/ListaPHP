<?php

$input_texto = "abcde vwxyz Joshua do Bar ABCDE VWXYZ";
$input_numero = 3; // DO NOT USE NEGATIVES PLEASE

function criptografarMensagem($texto, $strenght)
{
$distancia = strlen($texto);
$counter = 0;
$criptografado = $texto;
while ($counter < $distancia) // Wouldn't be able to figure this out without the legendary 12 year old Stack overflow post
    {
        if ($texto[$counter] !== " ") // Succesfully managed to make the characters "Overflow" and loop back to start. Also you can now personalize the "strength" of the cypher.
        {
        $ascii = ord($texto[$counter]);
    if($ascii+$strenght > 90 && $ascii+$strenght < 97) {
        $ascii -= 26; 
        } 
    if($ascii+$strenght > 122) {
        $ascii -= 26;
        } 
        $ascii+=$strenght;
        $criptografado[$counter] = chr($ascii);
        }
    $counter += 1;
}
return $criptografado;
}
echo 'Texto Original: ' . $input_texto . '<br>';
echo 'Força da cifra: ' . $input_numero . '<br>';
echo 'Texto Criptografado: ' . criptografarMensagem($input_texto, $input_numero);
?>