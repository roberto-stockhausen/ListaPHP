<?php

$input = array (
  array("Poção de cura", 5),
  array("Espada de madeira", 15),
  array("Armadura de couro", 25),
  array("Arco", 20)
);

function analisarProdutos($vetor)
{
$biggest = 0;
$tiny = 0;
$counter = 0;
$sum = 0;
$media = 0;
while(isset($vetor[$counter][1]))
    {
    echo $vetor[$counter][0] . ': ';
    echo $vetor[$counter][1] . ' <br>';
    $counter +=1;
    }
$counter = 0;
$tiny = $vetor[0][0];
while(isset($vetor[$counter][1]))
    {
    echo $vetor[$counter][1] . '<br>';
        echo $biggest . '<br>';
    if ($vetor[$counter][1] > $biggest)
        {
            $biggest = $counter; // Not working for mysterious reasons
        }
    if ($vetor[$counter][1] < $tiny)
        {
            $tiny = $counter;
        }
    $sum += $vetor[$counter][1];
    $counter += 1;
    }
    $media = $sum/$counter;
    echo 'Produto mais caro: ' . $vetor[$biggest][0] . '<br>';
    echo 'Produto mais barato: ' . $vetor[$tiny][0] . '<br>';
    echo 'Soma: ' . $sum . '<br>';
    echo 'Media: ' . $media;
}
analisarProdutos($input);

?>