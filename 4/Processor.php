<?php
class Processor
{
    private $name;
    private $price;

    function __construct($name = "", $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function  getName()
    {
        return $this->name;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    function getPrice()
    {
        return $this->price;
    }

    function showProcessor()
    {
        echo "Processor Name  : " . $this->getName() . "<br>";
        echo "Processor Price : " . $this->getPrice() . "<br>";
    }

    function __destruct(){}
}