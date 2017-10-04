<?php
$num = rand(1,10);
$tentativas = 0;
do {
    echo "\ndigite um numero de 1 a 10: ";
    $chute = (int)fgets(STDIN);

        if ($chute > $num) {
            echo "\nesta muito alto";
        } elseif($chute<$num){
            echo "\nesta muito baixo";
        }
        $tentativas++;
}while($chute!=$num);

printf("vc ganhou o jogo em %s tentativas",$tentativas);