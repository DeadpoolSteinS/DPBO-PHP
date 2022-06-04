<?php

require_once('KontrakPresenter.php');


class ProsesKaryawanA implements KontrakPresenter
{
	private $karyawan;
	private $data = [];

	function __construct()
	{
		//konstruktor
		try {
			$db_host = "localhost"; // host 
			$db_user = "root"; // user
			$db_password = ""; // password
			$db_name = "dbKandidatKaryawan"; // nama basis data
			$this->karyawan = new ModelKaryawanA($db_host, $db_user, $db_password, $db_name); //instansi karyawan
			$this->data = array(); //instansi list untuk data karyawan
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}

	function prosesDataKaryawan()
	{
		try {
			//mengambil data di tabel karyawan
			$this->karyawan->open();

			// button lolos clicked
			if (isset($_POST['lolos'])) $this->karyawan->add();
			// button tabel b clicked
			if (isset($_POST['tabelB'])) $this->karyawan->delete($_POST['idkandidat']);
			// button simpan on A table clicked
			if (isset($_POST['simpanA'])) $this->karyawan->update($_POST['idkandidat']);

			$this->karyawan->getKaryawan();
			while ($row = $this->karyawan->getResult()) {
				//ambil hasil query
				$this->data[] = $row; //tambahkan data karyawan ke dalam list
			}
			//tutup koneksi
			$this->karyawan->close();
		} catch (Exception $e) {
			//memproses error
			echo $e->getMessage();
		}
	}

	function getId($i)
	{
		//mengembalikan id karyawan dengan indeks ke i
		return $this->data[$i]['idkandidat'];
	}
	function getNama($i)
	{
		//mengembalikan nik karyawan dengan indeks ke i
		return $this->data[$i]['namakandidat'];
	}
	function getDaftar($i)
	{
		return $this->data[$i]['tanggaldaftar'];
	}
	function getAdministrasi($i)
	{
		//mengembalikan tempat karyawan dengan indeks ke i
		return $this->data[$i]['skoradministrasi'];
	}
	function getWawancara($i)
	{
		return $this->data[$i]['skorwawancara'];
	}
	function getSize()
	{
		return sizeof($this->data);
	}
}
