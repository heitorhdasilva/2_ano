<?php

    echo "Quantas dezenas você quer ter? ";
    $dezena = 6;
    echo "Quantas apostas você quer fazer? ";
    $aposta = 2;
function sorteio_numeros($dezenas){
    $sorteado = [];
    for ($i=1;$i<=$dezenas;$i++){
        $sorteado[] = rand(1,60);
    }
    $tam = count($sorteado);

        for ($k = 0; $k < $tam; $k++) {
            for ($j=$k+1;$j<$tam;$j++){
            if ($sorteado[$k]==$sorteado[$j]) {
                $sorteado[$k] = rand(1, 60);
            }
            }
        }

    return $sorteado;
}
for ($i=0;$i<$aposta;$i++){
    print_r(sorteio_numeros($dezena));
}
