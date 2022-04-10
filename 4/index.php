<?php
include "Pc.php";

$processor = new Processor("Ryzen 3 5300U", 3000000);
$disk = new Disk("SSD", "512GB", 1000000);
$ram = new Ram("8GB", 500000);

$pc = new Pc($processor, $disk, $ram);
$pc->showPc();

echo "<br>";

$pc->getProcessor()->setPrice(1000000);
$pc->showPc();