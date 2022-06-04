<?php


include("KontrakView.php");
include("presenter/ProsesKaryawanA.php");
include("presenter/ProsesKaryawanB.php");

class TampilKaryawan implements KontrakView
{
	private $proseskaryawanA; //presenter yang dapat berinteraksi langsung dengan view
	private $proseskaryawanB;
	private $tpl;

	function __construct()
	{
		//konstruktor
		$this->proseskaryawanA = new ProsesKaryawanA();
		$this->proseskaryawanB = new ProsesKaryawanB();
	}

	function tampil()
	{
		$this->proseskaryawanA->prosesDataKaryawan();
		$this->proseskaryawanB->prosesDataKaryawan();
		$dataA = null;
		$dataB = null;

		// tabel A view
		for ($i = 0; $i < $this->proseskaryawanA->getSize(); $i++) {
			$dataA .= "<tr class='align-middle'>
						<form action='' method='post'>
							<td>" . $this->proseskaryawanA->getId($i) . "</td>
							<td>" . $this->proseskaryawanA->getNama($i) . "</td>
							<td>" . $this->proseskaryawanA->getDaftar($i) . "</td>
							<td>" . $this->proseskaryawanA->getAdministrasi($i) . "</td>
							<td><input type='number' class='form-control' name='skorwawancara' step='any' value='" . $this->proseskaryawanA->getWawancara($i) . "'></td>
							<td>
								<input type='hidden' name='idkandidat' value='" . $this->proseskaryawanA->getId($i) . "'>
								<input type='hidden' name='namakandidat' value='" . $this->proseskaryawanA->getNama($i) . "'>
								<input type='hidden' name='tanggaldaftar' value='" . $this->proseskaryawanA->getDaftar($i) . "'>
								<input type='hidden' name='skoradministrasi' value='" . $this->proseskaryawanA->getAdministrasi($i) . "'>
								<button type='submit' name='simpanA' class='btn btn-outline-primary'>Simpan</button>
								<button type='submit' name='tabelB' class='btn btn-outline-secondary'>Tabel B</button>
							</td>
						</form>
					</tr>";
		}

		// tabel b view
		for ($i = 0; $i < $this->proseskaryawanB->getSize(); $i++) {
			$dataB .= "<tr class='align-middle'>
						<td>" . $this->proseskaryawanB->getId($i) . "</td>
						<td>" . $this->proseskaryawanB->getNama($i) . "</td>
						<td>" . $this->proseskaryawanB->getDaftar($i) . "</td>
						<td>" . $this->proseskaryawanB->getAdministrasi($i) . "</td>
						<td>
							<form action='' method='post'>
								<input type='hidden' name='idkandidat' value='" . $this->proseskaryawanB->getId($i) . "'>
								<input type='hidden' name='namakandidat' value='" . $this->proseskaryawanB->getNama($i) . "'>
								<input type='hidden' name='tanggaldaftar' value='" . $this->proseskaryawanB->getDaftar($i) . "'>
								<input type='hidden' name='skoradministrasi' value='" . $this->proseskaryawanB->getAdministrasi($i) . "'>
								<button type='submit' name='lolos' class='btn btn-outline-primary'>Lolos</button>
							</form>
						</td>
					</tr>";
		}
		// Membaca template skin.html
		$this->tpl = new Template("templates/skin.html");

		// Mengganti kode Data_Tabel dengan data yang sudah diproses
		$this->tpl->replace("DATA_TABEL_A", $dataA);
		$this->tpl->replace("DATA_TABEL_B", $dataB);

		// Menampilkan ke layar
		$this->tpl->write();
	}
}
