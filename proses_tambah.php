<?php
require 'koneksi2.php';
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$db = new database();

if($query){
    header("location:index.php");
}