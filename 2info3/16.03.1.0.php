<?php
$ns = [6,1,0];
for ($i=0;$i<3;$i++) {
    echo "Digite um numero: ";

    for ($j = $i; $j < 3; $j++) {
        if ($ns[$i]>$ns[$j]) {
           $ola = $ns[$i];
           $ns[$i] = $ns[$j];
           $ns[$j] = $ola;
        }
    }
}

var_dump($ns);
echo $ola;