<?php
// Saya Novaldi Sandi Ago 2003941 mengerjakan tugas UAS
// dalam mata kuliah Desain dan Pemrograman Berbasis Objek
// untuk keberkahanNya maka saya tidak melakukan kecurangan
// seperti yang telah dispesifikasikan. Aamiin

include("model/Template.class.php");
include("model/DB.class.php");
include("model/Karyawan.class.php");
include("model/ModelKaryawanA.php");
include("model/ModelKaryawanB.php");
include("view/TampilKaryawan.php");

$tp = new TampilKaryawan();
$tp->tampil();
