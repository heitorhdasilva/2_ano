<?php

require_once "classes/Conta.php";
require_once "classes/Cliente.php";
require_once "classes/funcionario.php";

//objeto cliente
//$cliente = new Cliente();
//$cliente->nome = 'Heitor';
//$cliente->cpf = 11882863909;

//objeto conta
//$minha_conta = new Conta();
//$minha_conta->setDonoDaConta($cliente);
//$minha_conta->deposita(643.29);
//$minha_conta->senha = 1234;
//$minha_conta->deposita(1000);
//$resultado = $minha_conta->sacar(700);

//objeto funcionario
$funcionario1 = new Funcionario();
$funcionario1->nome = "Fred";
$funcionario1->salario = 1500.00;
$funcionario1->departamento = "Petrobas";
$funcionario1->recebe_aumento(100.00);
echo "Voce ganha isso: ".$funcionario1->calcula_ganho_anual()." por ano";
/*if ($resultado){
    print 'consegui sacar'."\n";
}else{
    print 'nao foi possivel sacar'."\n";
}*/

//$conta_amigo = new Conta();
//$amigo = new Cliente();
//$amigo->nome = "josescleberson";
//$conta_amigo->setDonoDaConta($amigo);
//$conta_amigo->deposita(11.3);
//$conta_amigo->senha = 1234;
//
//$minha_conta->transferePara($conta_amigo,333.33);
//
//print "Saldo final da minha conta: ".$minha_conta->getSaldo();
//print "Saldo final do amigo: ".$conta_amigo->getSaldo();