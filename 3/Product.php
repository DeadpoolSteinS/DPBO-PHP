<?php
include "Hardware.php";

class Product extends Hardware{
	private $price;
    private $idProduct;

	public function __construct($price = "", $idProduct = 0){
        $this->price = $price;
		$this->idProduct = $idProduct;
	}

    public function setPrice($price){
		$this->price = $price;
	}

	public function getPrice(){
		return $this->price;
	}

	public function setIdProduct($idProduct){
		$this->idProduct = $idProduct;
	}

	public function getIdProduct(){
		return $this->idProduct;
	}
}