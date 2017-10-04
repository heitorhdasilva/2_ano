<?php


class Lutador
{
    public $nome;
    public $idade;
    public $invergadura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;

    function __construct($nome, $peso, $vitorias, $derrotas){

        $this->nome = $nome;
        $this->peso = $peso;
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;

        $this->setCategoria();

    }

    public function setPeso(float $peso){

        $this->peso = $peso;
        $this->setCategoria();

    }

    public function getPeso(){
        return $this->peso;
    }

    public function ganha_luta(){
        $this->vitorias++;
    }

    public function perde_luta(){
        $this->derrotas++;
    }

    public function apresenta(){
        echo "Ladies and Gentleman, com {$this->vitorias} vitorias e {$this->derrotas} derrotas pesando {$this->peso} kilos, na categoria {$this->categoria}..... {$this->nome}\n\n";
    }

    private function setCategoria(){
        if ($this->peso <=50){
            $this->categoria = 'Mosca';
        }elseif ($this->peso <= 70 ){
            $this->categoria = 'Bode';
        }else{
            $this->categoria = 'Snorlax';
        }
    }
}


//----------------------------------------------------

$saitama = new Lutador('Saitama San', 70, 120, 0);
$saitama->ganha_luta();
$saitama->ganha_luta();
$saitama->perde_luta();

$saitama->apresenta();

