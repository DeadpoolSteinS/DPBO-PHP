<?php


include("KontrakView.php");
include("presenter/ProsesPasien.php");

class CreatePasien implements KontrakView
{
    private $prosespasien; //presenter yang dapat berinteraksi langsung dengan view
    private $tpl;

    function __construct()
    {
        //konstruktor
        $this->prosespasien = new ProsesPasien();
    }

    function tampil()
    {
        $this->prosespasien->prosesDataPasien();
        // Membaca template skin.html
        $this->tpl = new Template("templates/create.html");

        if (isset($_GET['update'])) {
            $id = $_GET['update'];
            $data = $this->prosespasien->getDetail($_GET['update']);

            $this->tpl->replace("UPDATE_LINK", "update=$id");
            $this->tpl->replace("NIK_VALUE", $data['nik']);
            $this->tpl->replace("NAMA_VALUE", $data['nama']);
            $this->tpl->replace("TEMPAT_VALUE", $data['tempat']);
            $this->tpl->replace("TL_VALUE", $data['tl']);
            $this->tpl->replace("LAKI-LAKI_VALUE", ($data['gender'] == "Laki-laki") ? "checked" : "");
            $this->tpl->replace("PEREMPUAN_VALUE", ($data['gender'] == "Perempuan") ? "checked" : "");
            $this->tpl->replace("EMAIL_VALUE", $data['email']);
            $this->tpl->replace("TELP_VALUE", $data['telp']);
        } else {
            $this->tpl->replace("UPDATE_LINK", "");
            $this->tpl->replace("NIK_VALUE", "");
            $this->tpl->replace("NAMA_VALUE", "");
            $this->tpl->replace("TEMPAT_VALUE", "");
            $this->tpl->replace("TL_VALUE", "");
            $this->tpl->replace("LAKI-LAKI_VALUE", "checked");
            $this->tpl->replace("PEREMPUAN_VALUE", "");
            $this->tpl->replace("EMAIL_VALUE", "");
            $this->tpl->replace("TELP_VALUE", "");
        }

        // Menampilkan ke layar
        $this->tpl->write();
    }
}
