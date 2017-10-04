<?php

class Funcionario
{
    public $nome;
    public $departamento;
    public $salario = 0;
    public $data_entrada;
    public $rg;
    const SALARIO_ANUAL_E_DECIMO = 13;
    const FERIAS = 0.3;

    public function recebe_aumento(float $valor){
        $this->salario += $valor;
    }
    public function calcula_ganho_anual():float {

        return ($this->salario * SALARIO_ANUAL_E_DECIMO) + $this->salario * FERIAS;
    }

    public function mostra(){
        //TODO fazaer o metodo mostra como pede o exercicio
    }
}