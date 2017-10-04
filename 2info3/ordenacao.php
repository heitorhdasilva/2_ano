<?php

$numeros = [2,12,5,0,4];
$posMenor = 0;

for ($i=0; $i<5; $i++){
    for ($j=$i; $j<5; $j++) {
        if ($numeros[$j] < $numeros[$i]) {
            $aux = $numeros[$j];
            $numeros[$j] = $numeros[$i];
            $numeros[$i] = $aux;


        }
    }
}

print_r($numeros);