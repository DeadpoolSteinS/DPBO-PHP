<?php

class ModelKaryawanB extends DB
{
	function getKaryawan()
	{
		// Query mysql select data karyawan
		$query = "SELECT * FROM tkandidatkaryawanB";
		// Mengeksekusi query
		return $this->execute($query);
	}

	function delete($id)
	{
		// Query delete karyawan
		$query = "DELETE FROM tkandidatkaryawanB WHERE idkandidat=$id";
		return $this->execute($query);
	}

	function add()
	{
		// get post value
		$nama         = htmlspecialchars($_POST['namakandidat']);
		$daftar       = htmlspecialchars($_POST['tanggaldaftar']);
		$administrasi = htmlspecialchars($_POST['skoradministrasi']);

		// set insert query and execute
		$query  = "INSERT INTO tkandidatkaryawanB VALUES ('', '$nama', '$daftar', '$administrasi')";
		return $this->execute($query);
	}
}
