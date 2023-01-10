<?php

class Giochi{
    public $brand;
    public $tipologia;
    public $prezzo;
    public $materiale;

    public function Giochi($brand,$tipologia, $prezzo,  $materiale){
        $this->brand = $brand;
        $this->tipologia = $tipologia;
        $this->prezzo = $prezzo;
        $this->materiale = $materiale;
    }
}