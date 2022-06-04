<?php

// interface presenter karyawan
interface KontrakPresenter
{
	public function prosesDataKaryawan();
	public function getId($i);
	public function getNama($i);
	public function getDaftar($i);
	public function getAdministrasi($i);
	public function getSize();
}
