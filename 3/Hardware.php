<?php
class Hardware{
	private $model;
	private $brand;

	public function __construct($brand = "", $model = ""){
        $this->brand = $brand;
		$this->model = $model;
	}

	public function setModel($model){
		$this->model = $model;
	}

	public function getModel(){
		return $this->model;
	}

	public function setBrand($brand){
		$this->brand = $brand;
	}

	public function getBrand(){
		return $this->brand;
	}
}