<?php
require_once 'database.php';
$database = new Database();
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$umur = $_POST['umur'];
$database->simpan($nama, $alamat, $umur);
header('Location: tampil.php');
?>