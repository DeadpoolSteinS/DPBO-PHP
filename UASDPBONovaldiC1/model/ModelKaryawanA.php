<?php

class ModelKaryawanA extends DB
{
	function getKaryawan()
	{
		// Query mysql select data karyawan A
		$query = "SELECT * FROM tkandidatkaryawanA";
		// Mengeksekusi query
		return $this->execute($query);
	}

	function delete($id)
	{
		// query delete karyawan A
		$query = "DELETE FROM tkandidatkaryawanA WHERE idkandidat=$id";
		return $this->execute($query);
	}

	function add()
	{
		// get post value
		$id           = htmlspecialchars($_POST['idkandidat']);
		$nama         = htmlspecialchars($_POST['namakandidat']);
		$daftar       = htmlspecialchars($_POST['tanggaldaftar']);
		$administrasi = htmlspecialchars($_POST['skoradministrasi']);

		// query insert and execute query
		$query  = "INSERT INTO tkandidatkaryawanA VALUES ('$id', '$nama', '$daftar', '$administrasi', '')";
		return $this->execute($query);
	}

	function update($id)
	{
		// get post value, insert query, execute query
		$wawancara    = htmlspecialchars($_POST['skorwawancara']);
		$query  = "UPDATE tkandidatkaryawanA SET skorwawancara='$wawancara' WHERE idkandidat=$id";
		return $this->execute($query);
	}
}
