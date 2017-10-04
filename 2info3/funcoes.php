<?php
$numeros = [];
function somaVetor(array $vetor){
    $soma = 0;
    foreach ($vetor as $item){
        $soma += $item;
    }
    return $soma;
}



function mediaVetor(array $vetor){
    $media = 0;
    $tamanho = count($vetor);
    foreach ($vetor as $item){
        $media += $item;
        $media /= $tamanho;
    }
    return $media;
}



function subsZero(array $vetor){
    $tamanho = count($vetor);
    for ($i=0; $i<$tamanho; $i++){
        for ($j=$i+1; $j<$tamanho; $j++){
            if ($vetor[$i]==$vetor[$j]){
                $vetor[$i] = 0;
                $vetor[$j] = 0;
            }
        }
    }
    return $vetor;
}




function negZero(array $vetor){
    $tamanho = count($vetor);
    for ($i=0; $i<$tamanho; $i++){
        if ($vetor[$i]<0){
            $vetor[$i] = 0;
        }
    }
    return $vetor;
}

$resultado = negZero($numeros);

do{
    echo "Digite um numero: ";
    $numeros[] = (int) fgets(STDIN);
    echo "Quer continuar?(s/n)";
    $simNao = trim(fgets(STDIN));
}while($simNao == 's');

do{
    $tamanho = count($numeros);
    echo "\nDigite 1 para imprimir o somatorio dos numeros"."\n";
    echo "Digite 2 para imprimir a media dos numeros"."\n";
    echo "Digite 3 para imprimir o somatorio e a media dos numeros"."\n";
    echo "Digite 4 para substituir por zero todos os valores negativos e imprimir a media dos numeros"."\n";
    echo "Digite 5 para substituir por zero todos os valores repetidos e imprimir o somatorio e a media dos numeros"."\n";
    echo "Digite 0 para sair da aplicação"."\n";
    $escolha = (int) fgets(STDIN);
        switch ($escolha) {
            case 1:
                echo "\nA soma é: " . somaVetor($numeros);
                break;
            case 2:
                $res = mediaVetor($numeros);
                echo "\nA media é: " . $res;
                break;
            case 3:
                $res = mediaVetor($numeros);
                $resu = somaVetor($numeros);
                echo "\nA soma e a media são: " . $resu .', '. $res;
                break;
            case 4:
                $resul = negZero($numeros);
                $res = mediaVetor($numeros);
                foreach ($resul as $item) {
                    echo "\nFicou assim os numeros: " . $item;
                }
                echo "\nA media: ".$res;
                break;
            case 5:
                $res = subsZero($numeros);
                $resu = mediaVetor($numeros);
                $resul = somaVetor($numeros);
                foreach ($res as $re) {
                    echo "\nFicou assim os numeros: " . $re;
                }
                echo "\nA media e a soma: ".$resu.' ,'.$resul;
                break;
            case 0:
                break;

        }

}while($escolha!=0);