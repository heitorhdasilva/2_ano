<?php

function equa($a, $b, $c){
    $del = $b*$b-4*$a*$c;
    $x1 = (-$b+sqrt($del))/(2*$a);
    $x2 = (-$b-sqrt($del))/(2*$a);
    return "$x1 e $x2";
}

echo "digite um numero";
$n1 = fgets(STDIN);
echo "digite um numero";
$n2 = fgets(STDIN);
echo "digite um numero";
$n3 = fgets(STDIN);

echo equa($n1,$n2,$n3);