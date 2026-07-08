<?php

$cpf = 10583686590;

// Was listening to "Confrontation" before doing this. Ended up calling the variables after Jekyll and Hyde.

function cpfHider($cpf1)
{
$jekyll = array_map('intval', str_split($cpf1)); // Supposed to turn the number into an array. 
$counter = 0;
$hyde = $jekyll;
while ($counter <= 6) // Probably could have used a "for" for that
{
$hyde[$counter] = "*";
$counter += 1;
}
$HiddenCPF = implode('', $hyde);
return $HiddenCPF;
};

cpfHider($cpf);

echo "Hidden cpf: " . cpfHider($cpf);
?>