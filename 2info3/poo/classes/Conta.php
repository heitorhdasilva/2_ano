<?php

class Conta
{
    public $numero;
    private $saldo = 0;
    public $senha;
    private $dono_da_conta;
    public $limite;


    public function getDonoDaConta()
    {
        return $this->dono_da_conta;
    }

    public function setDonoDaConta(Cliente $dono_da_conta)
    {
        $this->dono_da_conta = $dono_da_conta;
    }


    public function getSaldo()
    {
        return $this->saldo;
    }


    public function sacar(float $valor):bool{
        echo "Digite sua senha: ";
        $senha = fgets(STDIN);
        if ($this->senha == $senha) {
            if ($valor <= $this->saldo) {
                $this->saldo -= $valor;
                return true;
            }else{
                return false;
            }

        }

    }

    public function deposita(float $valor){
        echo "Digite sua senha: ";
        $senha = fgets(STDIN);
        if ($this->senha == $senha) {
            if ($valor > 0) {
                $this->saldo += $valor;
            }
        }
    }

    public function transferePara(Conta $conta_destino, $valor){

        $deu_certo = $this->sacar($valor);
        if ($deu_certo){
            $conta_destino->deposita($valor);
        }

    }

}

