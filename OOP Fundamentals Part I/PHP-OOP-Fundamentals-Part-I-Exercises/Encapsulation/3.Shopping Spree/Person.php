<?php

namespace Shopping;


class Person
{// name, money and a bag of products
    private $name;
    private $money;
    private $bagOfProducts = [];

    public function __construct($name, $money)
    {
        $this->setName($name);
        $this->setMoney($money);
    }

    public function setBagOfProducts(string $product)
    {
        $this->bagOfProducts[] = $product;
    }

    public function setName($name)
    {
        if ($name == '') {
            throw new \Exception('Name cannot be empty');
        }
        $this->name = $name;

    }

    public function setMoney($money)
    {
        if ($money < 0) {

            throw new \Exception('Money cannot be negative');
        }
        $this->money = $money;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getMoney()
    {
        return $this->money;
    }

    public function getBagOfProducts(): array
    {
        return $this->bagOfProducts;
    }

    public function fullBag($product)
    {
        $this->bagOfProducts[] = $product;
    }
    public function Bay(int $price){
        return $this->money-=$price;
    }
}