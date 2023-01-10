<?php

class Cibo{
    public $brand;
    public $ingredienti;
    public $prezzo;
    public $quantità;

    public function Cibo($brand,$ingredienti, $prezzo,  $quantità){
        $this->brand = $brand;
        $this->ingredienti = $ingredienti;
        $this->prezzo = $prezzo;
        $this->quantità = $quantità;
    }
}