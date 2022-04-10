<?php
include "Product.php";

class Memory extends Product{
	private $frequency;
	private $memorySize;
	private $supportCuda;

	public function __construct($frequency = "", $memorySize = 0, $supportCuda = false){
		$this->frequency = $frequency;
		$this->memorySize = $memorySize;
		$this->supportCuda = $supportCuda;
	}

	public function setFrequency($frequency){
		$this->frequency = $frequency;
	}

	public function getFrequency(){
		return $this->frequency;
	}

	public function setMemorySize($memorySize){
		$this->memorySize = $memorySize;
	}

	public function getMemorySize(){
		return $this->memorySize;
	}

	public function setSupportCuda($supportCuda){
		$this->supportCuda = $supportCuda;
	}

	public function getSupportCuda(){
		return $this->supportCuda;
	}
}