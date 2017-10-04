<?php
$heroiDaGalera = [];
$j = 0;
echo "Quantos HERO voce quer mostrar na lista?:";
$quantosHero = fgets(STDIN);
for ($i=0;$i<$quantosHero;$i++){
    $j = $j + 1;
    echo "Digite seu $j heroi: ";
    $heroiDaGalera[] = fgets(STDIN);
}

//$numeroHerois = count($heroisDaGalera);

foreach ($heroiDaGalera as $item => $heroi){
    echo $item+1," lugar: $heroi";
}

