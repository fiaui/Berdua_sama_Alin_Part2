<?php
require "koneksi2.php";
$id = $_GET['id'];
$database = new database();
$query = $database->hapus('siswa', ['id' => $id]);

if($query){
    header("location:index.php");
}