<?php

class Buku extends DB
{
    function __construct($db_host = '', $db_user = '', $db_password = '', $db_name = '')
    {
        $this->DB($db_host, $db_user, $db_password, $db_name);
    }

    function getBuku()
    {
        $query = "SELECT * FROM buku";
        return $this->execute($query);
    }

    function getDetailBuku($id)
    {
        $query = "SELECT * FROM buku WHERE id_buku = '$id'";
        return $this->execute($query);
    }

    function add($data)
    {
        $judul = $data['tjudul'];
        $penerbit = $data['tpenerbit'];
        $deskripsi = $data['tdeskripsi'];
        $status = "-";
        $author = $data['cmbauthor'];

        $query = "insert into buku values ('', '$judul', '$penerbit', '$deskripsi', '$status', '$author')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "delete FROM buku WHERE id_buku = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function statusBuku($id)
    {

        $status = "Best Seller";
        $query = "update buku set status = '$status' where id_buku = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}
