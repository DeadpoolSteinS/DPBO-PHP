<?php

include("conf.php");
include("includes/Template.class.php");
include("includes/DB.class.php");
include("includes/Ormawa.class.php");

$ormawa = new Ormawa($db_host, $db_user, $db_pass, $db_name);
$ormawa->open();

// get divisi value now
if(isset($_GET["id_divisi"])) $ormawa->getDivisi($_GET["id_divisi"]);
else $ormawa->getDivisiAll();
$logo = $ormawa->getResult()[0];

if(isset($_GET["id_hapus"]))
{
    $ormawa->delete($_GET["id_hapus"]);
    $ormawa->close();

    // not from default divisi
    if(isset($_GET["id_divisi"])) header("Location: index.php?id_divisi=" . $_GET['id_divisi']);
    else header("Location: index.php");
    exit;
}
else if(isset($_GET["id"]))
{
    $ormawa->getDetail($_GET["id"]);
    $result = $ormawa->getResult();
}
// get data of pengurus divisi
else
{
    $result = array();
    $ormawa->getSelect($logo["id_divisi"]);
    $select = $ormawa->getResult();
    foreach($select as $item)
    {
        $ormawa->getPengurusBidang($item["id_bidang"]);
        $result = array_merge($result, $ormawa->getResult());
    }
}

$data = null;

foreach ($result as $list) {
    $ormawa->getJabatan($list["id_bidang"]);
    $bidang = $ormawa->getResult()[0]["jabatan"];
    if(isset($_GET["id"]))
    {
        $data .= "<div></div>
                <div class='content'>
                    <img src='img/" . $list["image"] . "'>
                    <p class='nama-pengurus'>". $list["nama"] . "</p>
                    <p class='jabatan'>" . $bidang ."</p>
                    <div id='action'>
                        <a href='index.php?ADD_ID_DIVISI'>Back</a>
                        <a href='create.php?ADD_ID_DIVISI&id=" . $list["id"] . "'>Edit</a>
                        <a href='index.php?ADD_ID_DIVISI&id_hapus=" . $list["id"] . "'>Hapus</a>
                    </div>
                </div>";
    }
    else
    {
        $data .= "<a href='index.php?ADD_ID_DIVISI&id=" . $list["id"] . "'>
                    <div class='content'>
                        <img src='img/" . $list["image"] . "'>
                        <p class='nama-pengurus'>". $list["nama"] . "</p>
                        <p class='jabatan'>" . $bidang ."</p>
                    </div>
                </a>";
    }
}

// get link to add anggota reference divisi
$addIdDivisi = (isset($_GET["id_divisi"])) ? "id_divisi=" . $_GET["id_divisi"] : "";

$ormawa->close();
$tp2 = new Template("templates/index.html");
$tp2->replace("DATA_TABEL", $data);
$tp2->replace("LOGO", $logo["nama_divisi"]);
$tp2->replace("ADD_ID_DIVISI", $addIdDivisi);
$tp2->write();
