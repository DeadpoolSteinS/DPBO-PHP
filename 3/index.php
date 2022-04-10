<?php
include "Memory.php";

$A = new Memory("2000", 2, true);

$A->setBrand("Acer");
$A->setModel("2A");
$A->setPrice("5.000.000");
$A->setIdProduct(27);

echo "Brand        : " . $A->getBrand() . "<br>";
echo "Model        : " . $A->getModel() . "<br>";
echo "Price        : " . $A->getPrice() . "<br>";
echo "Id Product   : " . $A->getIdProduct() . "<br>";
echo "Frequency    : " . $A->getFrequency() . "<br>";
echo "Size Memory  : " . $A->getMemorySize() . "<br>";
echo "Support Cuda : " . $A->getSupportCuda() . "<br>";