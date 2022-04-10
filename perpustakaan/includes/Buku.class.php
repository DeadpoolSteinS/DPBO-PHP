<?php

class Buku extends DB
{
    function __construct($db_host='', $db_user='', $db_password='', $db_name='')
	{
		$this->DB($db_host, $db_user, $db_password, $db_name);
	}
    
    function getBuku()
    {
        $query = "SELECT * FROM buku";
        return $this->execute($query);
    }
}


?>