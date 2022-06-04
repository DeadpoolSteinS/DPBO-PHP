<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

class TabelPasien extends DB
{
	function getPasien()
	{
		// Query mysql select data pasien
		$query = "SELECT * FROM pasien";
		// Mengeksekusi query
		return $this->execute($query);
	}

	function getDetailPasien($id)
	{
		// Query mysql select data pasien
		$query = "SELECT * FROM pasien WHERE id=$id";
		// Mengeksekusi query
		return $this->execute($query);
	}

	function delete($id)
	{
		$query = "DELETE FROM pasien WHERE id=$id";
		return $this->execute($query);
	}

	function add()
	{
		$nik    = htmlspecialchars($_POST['nik']);
		$nama   = htmlspecialchars($_POST['nama']);
		$tempat = htmlspecialchars($_POST['tempat']);
		$tl     = htmlspecialchars($_POST['tl']);
		$gender = htmlspecialchars($_POST['gender']);
		$email  = htmlspecialchars($_POST['email']);
		$telp   = htmlspecialchars($_POST['telp']);

		$query  = "INSERT INTO pasien VALUES ('', '$nik', '$nama', '$tempat', '$tl', '$gender', '$email', '$telp')";
		return $this->execute($query);
	}

	function update($id)
	{
		$nik    = htmlspecialchars($_POST['nik']);
		$nama   = htmlspecialchars($_POST['nama']);
		$tempat = htmlspecialchars($_POST['tempat']);
		$tl     = htmlspecialchars($_POST['tl']);
		$gender = htmlspecialchars($_POST['gender']);
		$email  = htmlspecialchars($_POST['email']);
		$telp   = htmlspecialchars($_POST['telp']);

		$query  = "UPDATE pasien SET nik='$nik', nama='$nama', tempat='$tempat', tl='$tl', gender='$gender', email='$email', telp='$telp' WHERE id=$id";
		return $this->execute($query);
	}
}
