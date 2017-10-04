<?php
 require_once "classes/Pessoa.php";
 require_once "classes/Porta.php";

 $alfredo = new Pessoa();
 $alfredo->nome = 'Alfredo';
 $alfredo->idade = 21;
 $alfredo->faz_aniversario();


 #------------------------------------
//Classe porta

$porta = new Porta();
$porta->cor = 'branca';
$porta->pinta('preta');
$porta->fecha();


if ($porta->getAberta()){
    echo "\nA porta esta aberta";
}else{
    echo "\nA porta esta fechada";
}
