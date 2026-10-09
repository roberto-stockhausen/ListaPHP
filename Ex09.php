<?php
$input = 28;
function analisarNumero($number)
{
if ($number%2 == 0)
{
echo "<p> par </p>";
}
else
{
echo "<p> impar </p>";
}
$perfeito = 0;
$primo = true;
$counter = 2;
while ($counter < $number)
{
if ($number % $counter == 0)
    {   
        $perfeito += $counter;
        $primo = false;
    }
    $counter += 1;
}
if ($primo == true)
    {
        echo "<p> primo </p>";
    }
    else
    {
        echo "<p> não primo </p>"; 
    }
if ($perfeito+1 == $number)
    {
        echo "<p> Número perfeito </p>"; 
    }
    else
    {
    echo "<p> Número imperfeito </p>"; 
    }
}

analisarNumero($input)

?>