<?php

class Product{

    private $image;
    private $price;
    private $name;

    public function _constract(string $image, float $price, string $name)
    {
        $this->image = $image;
        $this->price = $price;
        $this->name = $name;
    }

    public function getImage()
    {
        return $this->image;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getName()
    {
        return $this->name;
    }
}
