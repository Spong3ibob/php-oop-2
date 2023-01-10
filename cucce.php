<?php

class Cucce{
    public $prezzo;
    public $grandezza;
    public $materiale;

    public function constant( $prezzo,  $grandezza,  $materiale){
        $this->prezzo = $prezzo;
        $this->grandezza = $grandezza;
        $this->materiale = $materiale;
    }
}