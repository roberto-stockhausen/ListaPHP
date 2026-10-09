<?php

$input = [5, 2, 4, 6];

function checarNotas($notas){
$counter = 0;
$biggest = 0;
$tyniest = 10;
$sum = 0;
$media = 0;
while (isset($notas[$counter]))
    {
        $sum += $notas[$counter];
        if ($notas[$counter] > $biggest)
            {
                $biggest = $notas[$counter];
            }
        if ($notas[$counter] < $tyniest)
            {
                $tyniest = $notas[$counter];
            }
        $counter += 1;
    }
    $media = $sum/$counter;
    echo "Maior nota: " . $biggest . "<br>";
    echo "Menor nota: " . $tyniest . "<br>";
    echo "Media: " . $media . "<br>";
    if ($media >= 7)
        {
        echo "Aprovado!";
        }
        else if ($media >= 5)
        {
        echo "Em recuperação!";          
        }
        else
        {
        echo "REPROVADO!";           
        }
}
checarNotas($input)

?>