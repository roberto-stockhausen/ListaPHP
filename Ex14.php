<?php
$input = [500, 200, 100, 600, 700, 100, 1200, 400];
function estatisticasNumericas($vetor){ // Very similar to Ex10
$counter = 0;
$biggest = 0;
$tiniest = $vetor[$counter];
$sum = 0;
$average = 0;
$value_amount = 0;
$median = 0; // This is going to be a pain to get
$odd_amount = 0;
$even_amount = 0;

while (isset($vetor[$counter]))
    {
        $sum += $vetor[$counter];
        $value_amount += 1;
        if ($vetor[$counter] > $biggest)
            {
                $biggest = $vetor[$counter];
            }
        if ($vetor[$counter] < $tiniest)
            {
                $tiniest = $vetor[$counter];
            }
        if ($vetor[$counter] % 2 == 0){$even_amount += 1;}else{$odd_amount+=1;}
        $counter += 1;
    }
    $average = $sum/$value_amount;
    sort($vetor); // It's so easy when sorting is built-in
    if ($value_amount % 2 == 0)
        {
        $median_piece = (floor($value_amount/2)-1);
        $median_average = ($vetor[$median_piece]+$vetor[$median_piece+1])/2;
        $median = $median_average;
        }
        else{$median = $vetor[floor($value_amount/2)];}
echo 'Soma: ' . $sum . '<br>';
echo 'Média: ' . $average . '<br>';
echo 'Maior valor: ' . $biggest . '<br>';
echo 'Menor valor: ' . $tiniest . '<br>';
echo 'Mediana: ' . $median . '<br>';
echo 'Quantidade de pares: ' . $even_amount . '<br>';
echo 'Quantidade de ímpares: ' . $odd_amount . '<br>';
}
estatisticasNumericas($input);
?>