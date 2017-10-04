<?php

//function seculo(string $ano)
//{
//    $seculo = $ano[0] . $ano[1];
//    if ($ano[2] . $ano[3] == "00") {
//        echo "seculo: " . $seculo;
//    } else {
//        $seculo += 1;
//        echo "seculo: " . $seculo;
//    }
//}

function seculo($ano){
    $seculo = ceil($ano/100);

    echo "O seculo é: ".$seculo;

}

seculo(100);