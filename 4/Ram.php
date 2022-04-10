<?php
class Ram
{
    private $capacity;
    private $price;

    function __construct($capacity = "", $price = 0)
    {
        $this->capacity = $capacity;
        $this->price = $price;
    }

    function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

    function getCapacity()
    {
        return $this->capacity;
    }

    function setPrice($price)
    {
        $this->price = $price;
    }

    function getPrice()
    {
        return $this->price;
    }

    function showRam()
    {
        echo "RAM Capacity    : " . $this->getCapacity() . "<br>";
        echo "RAM Price       : " . $this->getPrice() . "<br>";
    }

    function __destruct(){}
}