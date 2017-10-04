<?php

function adicionarValor(array &$numeros, $valor){
    array_push($numeros, $valor);
}

$numeros = [2,4,6];
adicionarValor($numeros, 8);
print_r($numeros);


function calculaAumento(float $salario, int $aumento){
    $salarioAumentado = $salario + ($salario * ($aumento/100));
    return $salarioAumentado;
}

$salAumentado = calculaAumento(4500, 25);

if ($salAumentado > 5000){
    echo "Usuario deve pagar mais imposto.";
}