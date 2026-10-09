<?php
$input = "Don't you dare go hollow";

function formatarTexto($texto)
{
echo strtoupper($texto) . '<br>';
echo strtolower($texto) . '<br>';
$distancia = strlen($texto);
$counter = 0;
echo 'Iniciais: ';
while($counter < $distancia)
    {
        if ($texto[$counter] == " " && $texto[$counter+1] !== " ") // Eu amo a variável $counter ela me salvou de tantas coisas
        {
        echo strtoupper($texto[$counter+1]);
        }
        if ($counter == 0)
            {
            echo strtoupper($texto[$counter]);    
            }
        $counter += 1;
    }
    echo '<br> Quantidade de caracteres: ' . $distancia;
}
formatarTexto($input);
?>