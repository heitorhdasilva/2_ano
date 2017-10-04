<?php

$nsorteado = rand(1,10);
$tentativas = 0;
do{
    echo "Digite um numero entre 1 a 10: ";
    $nescolhido = fgets(STDIN);
    if ($nescolhido>10 or $nescolhido <= 0){
        echo "ERROR 404";
        break;
    }
    if ($nescolhido!=$nsorteado) {
        echo "Errouuuuuu, tente de novo\n";
    }
    if ($nescolhido>$nsorteado){
        echo "Big number boyzin\n";
    }elseif ($nescolhido<$nsorteado){
        echo "Little number boyzin\n";
    }
    $tentativas++;
}while($nescolhido!=$nsorteado);
if ($nescolhido==$nsorteado) {
    echo 'WINDERSON! QI 200, o numero era '.$nsorteado.',em '.$tentativas.' tentavivas';
}






