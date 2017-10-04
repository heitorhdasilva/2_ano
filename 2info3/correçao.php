<?php
echo "Digite uma palavra";
$pol = fgets(STDIN);

$inv = strrev($pol);

if ($pol == $inv){
    $inv = true;
    echo $inv;
}else{
    $inv = false;
}
