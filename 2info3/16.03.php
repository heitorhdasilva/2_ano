<?php
$ns1 = [];
$ns2 = [];
$opes = [];
$res = [];
for ($i=0;$i<1;$i++) {
    print "Digite um numero: ";
    $ns1[] = fgets(STDIN);
    print "Digite uma operação: ";
    $opes[] = trim(fgets(STDIN));
    print "Digite outro numero: ";
    $ns2[] = fgets(STDIN);
    switch ($opes[$i]){
        case "+":
            $res[$i] = $ns2[$i] + $ns1[$i];
            break;
        case "-":
            $res[$i] = $ns1[$i]-$ns2[$i];
            break;
        case "*":
            $res[$i] = $ns1[$i]*$ns2[$i];
            break;
        case "/":
            $res[$i] = $ns1[$i]/$ns2[$i];
    }
}

foreach ($res as $re){
    print "O resultado é: ".$re;
}