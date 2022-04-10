<?php 

class Task extends DB{

	function __construct($db_host='', $db_user='', $db_password='', $db_name='')
	{
		$this->DB($db_host, $db_user, $db_password, $db_name);
	}
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";
		// Mengeksekusi query
		$this->execute($query);
	}
	
	function hapus($id)
	{
		$query = "DELETE FROM tb_to_do WHERE id=$id";
		$this->execute($query);
	}

	function tambah()
	{
		$tname = htmlspecialchars($_POST["tname"]);
		$tdeadline = htmlspecialchars($_POST["tdeadline"]);
		$tdetails = htmlspecialchars($_POST["tdetails"]);
		$tsubject = htmlspecialchars($_POST["tsubject"]);
		$tpriority = htmlspecialchars($_POST["tpriority"]);

		$query = "INSERT INTO tb_to_do VALUES (NULL, '$tname', '$tdetails', '$tsubject', '$tpriority', '$tdeadline', 'Belum');";
		$this->execute($query);
	}

	function selesai($id)
	{
		$query = "UPDATE tb_to_do SET status_td='Sudah' WHERE id=$id";
		$this->execute($query);
	}

	function sorting($by)
	{
		$query = ($by == "priority_td") ? "SELECT * FROM tb_to_do ORDER BY CASE WHEN priority_td = 'Low' THEN '1' WHEN priority_td = 'Medium' THEN '2' WHEN priority_td = 'High' THEN '3' END ASC" : "SELECT * FROM tb_to_do ORDER BY $by ASC";
		$this->execute($query);
	}
}

?>