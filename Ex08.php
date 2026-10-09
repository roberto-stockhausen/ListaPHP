<?php

$input = "joshua,marquês,marlon";
function OrdenarNomes($nomes)
{
$separated = explode(",", $nomes);
$counter = 0;
while (isset($separated[$counter]))
{
echo '<p>' .  $separated[$counter] . '</p>'; 
$counter += 1;
}
}
 
OrdenarNomes($input)

?>