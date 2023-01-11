<?php

class Product{

    private $image;
    private $price;
    private $name;
    private $category;

    public function __construct(string $image, float $price, string $name, Category $category)
    {
        $this->image = $image;
        $this->price = $price;
        $this->name = $name;
        $this->category = $category;
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
    public function getCategory()
    {
        return $this->category;
    }
}
