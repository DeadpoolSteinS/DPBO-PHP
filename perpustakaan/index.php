<?php

include("conf.php");
include("includes/Template.class.php");
include("includes/DB.class.php");
include("includes/Buku.class.php");

$buku = new Buku($db_host, $db_user, $db_pass, $db_name);
$buku->open();
$buku->getBuku();
$data = null;
$no = 1;

while (list($id, $judul, $penerbit, $deskripsi, $status, $id_author) = $buku->getResult()) {
    $data .= "<tr>
            <td>" . $no++ . "</td>
            <td>" . $judul . "</td>
            <td>" . $penerbit . "</td>
            <td>" . $deskripsi . "</td>
            <td>" . $status . "</td>
            <td>" . $id_author . "</td>
            <td>
            <a href='index.php?id_edit=" . $id .  "' class='btn btn-warning' '>Edit</a>
            <a href='index.php?id_hapus=" . $id . "' class='btn btn-danger' '>Hapus</a>
            </td>
            </tr>";
}

$buku->close();
$tpl = new Template("templates/index.html");
$tpl->replace("DATA_TABEL", $data);
$tpl->write();
