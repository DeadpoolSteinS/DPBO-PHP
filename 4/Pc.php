<?php
include "Processor.php";
include "Disk.php";
include "Ram.php";

class Pc
{
    private $processor;
    private $disk;
    private $ram;
    private $totalPrice;

    function __construct($processor, $disk, $ram, $totalPrice = 0)
    {
        $this->processor = $processor;
        $this->disk = $disk;
        $this->ram = $ram;
        $this->totalPrice = $processor->getPrice() + $disk->getPrice() + $ram->getPrice();
    }

    function  setProcessor($processor)
    {
        $this->$processor = $processor;
    }

    function getProcessor()
    {
        return $this->processor;
    }

    function  setDisk($disk)
    {
        $this->$disk = $disk;
    }

    function getDisk()
    {
        return $this->disk;
    }

    function  setRam($ram)
    {
        $this->ram = $ram;
    }

    function getRam()
    {
        return $this->ram;
    }

    function  setTotalPrice()
    {
        $this->totalPrice = $this->processor->getPrice() + $this->disk->getPrice() + $this->ram->getPrice();
    }

    function getTotalPrice()
    {
        return $this->totalPrice;
    }

    function  showPc()
    {
        $this->processor->showProcessor();
        $this->disk->showDisk();
        $this->ram->showRam();

        $this->setTotalPrice();
        echo "Total Price     : " . $this->getTotalPrice() . "<br>";
    }

    function __destruct(){}
}