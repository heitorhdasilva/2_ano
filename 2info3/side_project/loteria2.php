<?php


$jogo = $_GET["jogo-selecionado"];
$name = $_GET["nome"];
echo "Ola $name, bem vindo a Loteria Virtual\n";
//tudo pronto, incluir a tela de apostas
require 'modojogo.html';
switch ($jogo){
    case 1:
       // echo "Quantas dezenas você quer ter? ";
       // $dezena = trim(fgets(STDIN));
        if ($dezena>15 or $dezena<6){
            print "Numero de dezena invalido (informe um numero de 6 a 15)";
         //   $dezena = trim(fgets(STDIN));
        }
       // echo "Quantas apostas você quer fazer? ";
       // $aposta = trim(fgets(STDIN));
        switch ($dezena){
            case 6;
                $dinheiro = 3.50;
                break;
            case 7;
                $dinheiro = 24.50;
                break;
            case 8;
                $dinheiro = 98.00;
                break;
            case 9;
                $dinheiro = 294.00;
                break;
            case 10;
                $dinheiro = 735.00;
                break;
            case 11;
                $dinheiro = 1617.00;
                break;
            case 12;
                $dinheiro = 3234.00;
                break;
            case 13;
                $dinheiro = 6006.00;
                break;
            case 14;
                $dinheiro = 10510.00;
                break;
            case 15;
                $dinheiro = 17517.00;
                break;
            default:
                $dinheiro = "???";
        }
        $totalDin = $dinheiro*$aposta;
        break;
    case 2:
       // print "Quantas dezenas você quer ter? ";
        $dezena = trim(fgets(STDIN));
        if ($dezena>15 or $dezena<5){
            print "Numero de dezena invalido (informe um numero de 5 a 15)";
            //$dezena = trim(fgets(STDIN));
        }
       // echo "Quantas apostas você quer fazer? ";
        $aposta = trim(fgets(STDIN));
        switch ($dezena){
            case 5;
                $dinheiro = 1.50;
                break;
            case 6;
                $dinheiro = 9.50;
                break;
            case 7;
                $dinheiro = 31.50;
                break;
            case 8;
                $dinheiro = 84.00;
                break;
            case 9;
                $dinheiro = 189.00;
                break;
            case 10;
                $dinheiro = 378.00;
                break;
            case 11;
                $dinheiro = 693.00;
                break;
            case 12;
                $dinheiro = 1188.00;
                break;
            case 13;
                $dinheiro = 1930.50;
                break;
            case 14;
                $dinheiro = 3003.00;
                break;
            case 15;
                $dinheiro = 4504.50;
                break;
            default:
                $dinheiro = "???";
        }
        $totalDin = $dinheiro*$aposta;
        break;
    case 3:
      //  echo "O numero de dezenas é definido em 50.\n";
        $dezena = 50;
        $dinheiro = 3.50;
      //  echo "Quantas apostas você quer fazer? ";
      //  $aposta = trim(fgets(STDIN));
        $totalDin = $dinheiro*$aposta;
        break;
    case 4:
        //print "Quantas dezenas você quer ter? ";
       // $dezena = trim(fgets(STDIN));
        if ($dezena>18 or $dezena<15){
            print "Numero de dezena invalido (informe um numero de 15 a 18)";
       //     $dezena = trim(fgets(STDIN));
        }
       // echo "Quantas apostas você quer fazer? ";
       // $aposta = trim(fgets(STDIN));
        switch ($dezena){
            case 15;
                $dinheiro = 2.00;
                break;
            case 16;
                $dinheiro = 32.00;
                break;
            case 17;
                $dinheiro = 272.00;
                break;
            case 18;
                $dinheiro = 1632.00;
                break;
            default:
                $dinheiro = "???";
        }
        $totalDin = $dinheiro*$aposta;
        break;
    default:
        echo "Opção invalida";
        exit();
        break;
}


function sorteio_numeros($dezenas){
    $sorteado = [];
    for ($i=1;$i<=$dezenas;$i++){
        $sorteado[] = rand(1,60);
    }

    return $sorteado;
}
function naorepetidos(array $numeros,$jogo){
    $tam = count($numeros);
    do {
        $repetido = 0;
        for ($k = 0; $k < $tam; $k++) {
            for ($j = $k + 1; $j < $tam; $j++) {
                if ($numeros[$k] == $numeros[$j]) {
                    switch ($jogo){
                        case 1:
                            $numeros[$j] = rand(1, 60);
                            break;
                        case 2:
                            $numeros[$j] = rand(1, 80);
                            break;
                        case 3:
                            $numeros[$j] = rand(1, 100);
                            break;
                        case 4:
                            $numeros[$j] = rand(1, 25);
                            break;
                    }
                    $repetido = 1;
                }
            }
        }
    }while($repetido == 1);
    return $numeros;
}
$tam = count(sorteio_numeros($dezena));
for ($i=0;$i<$aposta;$i++){
    for ($j=0;$j<$tam;$j++){
        $correto = naorepetidos(sorteio_numeros($dezena),$jogo);
        echo " ".$correto[$j];
    }
    echo "\n";
}
//print "Total a pagar ".$totalDin." reais";
