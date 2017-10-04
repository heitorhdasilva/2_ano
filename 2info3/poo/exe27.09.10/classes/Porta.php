<?php


class Porta
{
    public $aberta;
    public $cor;
    public $dimensaoX;
    public $dimensaoY;
    public $dimensaoZ;

    public function abre(){
        $this->aberta = true;
    }
    public function fecha(){
        $this->aberta = false;
    }
    public function pinta(string $cor){
        $this->cor = $cor;
    }

    /**
     * @return mixed
     */
    public function getAberta(): bool {
        return $this->aberta;
    }


}