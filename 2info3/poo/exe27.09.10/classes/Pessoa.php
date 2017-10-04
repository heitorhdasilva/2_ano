<?php


class Pessoa
{
    public $nome;
    public $idade;

 public function faz_aniversario(){
     $this->idade++;
     echo "Olá ".$this->nome.", parabens pelos seus ".$this->idade." anos";
 }
}