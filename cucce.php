<?php

class Cuccia{
    public $brand;
    public $colore;
    public $prezzo;
    public $dimensioni;
    public $materiale;

    public function Cuccia($brand,$colore, $prezzo,  $dimensioni,  $materiale){
        $this->brand = $brand;
        $this->colore = $colore;
        $this->prezzo = $prezzo;
        $this->dimensioni = $dimensioni;
        $this->materiale = $materiale;
    }
}