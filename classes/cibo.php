<?php

require_once __DIR__ . "/Product.php";

class Food extends Product{
    private $scadenza;

    public function setScadenza($date)
    {
        $this->scadenza = $date;
    }
    public function getScadenza()
    {
        return $this->scadenza;
    }
};

