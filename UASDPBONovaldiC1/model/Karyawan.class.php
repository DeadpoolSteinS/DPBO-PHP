<?php

// karyawan object
class Karyawan
{
	var $id           = '';
	var $nama         = '';
	var $daftar       = '';
	var $administrasi = '';
	var $wawancara    = '';

	// konstuktor
	function __construct($id = '', $nama = '', $daftar = '', $administrasi = '', $wawancara = '')
	{
		$this->id           = $id;
		$this->nama         = $nama;
		$this->daftar       = $daftar;
		$this->administrasi = $administrasi;
		$this->wawancara    = $wawancara;
	}

	// set function
	function setId($id)
	{
		$this->id = $id;
	}
	function setNama($nama)
	{
		$this->nama = $nama;
	}
	function setDaftar($daftar)
	{
		$this->daftar = $daftar;
	}
	function setAdministrasi($administrasi)
	{
		$this->administrasi = $administrasi;
	}
	function setWawancara($wawancara)
	{
		$this->wawancara = $wawancara;
	}

	// get function
	function getId()
	{
		return $this->id;
	}
	function getNama()
	{
		return $this->nama;
	}
	function getDaftar()
	{
		return $this->daftar;
	}
	function getAdministrasi()
	{
		return $this->administrasi;
	}
	function getWawancara()
	{
		return $this->wawancara;
	}
}
