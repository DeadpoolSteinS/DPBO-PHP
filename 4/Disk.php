<?php
class Disk
{
    private $type;
    private $capacity;
    private $price;

    function __construct($type = "", $capacity = "", $price = 0)
    {
        $this->type = $type;
        $this->capacity = $capacity;
        $this->price = $price;
    }

    function setType($type)
    {
        $this->type = $type;
    }

    function getType()
    {
        return $this->type;
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

    function showDisk()
    {
        echo "Disk Type       : " . $this->getType() . "<br>";
        echo "Disk Capacity   : " . $this->getCapacity() . "<br>";
        echo "Disk Price      : " . $this->getPrice() . "<br>";
    }

    function __destruct(){}
}