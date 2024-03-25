<?php
require_once 'database.php';
$database = new Database();
$id = $_GET['id'];
$database->hapus($id);
header('Location: tampil.php');
?>