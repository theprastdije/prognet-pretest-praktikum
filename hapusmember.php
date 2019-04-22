<?php
//koneksi ke db
include 'koneksi.php';

//ambil data id yg dikirim url
$id = $_GET['id'];

//hapus data dari db
mysqli_query($koneksi,"DELETE FROM member WHERE id_member='$id'");

//balik ke index.php
header("location:index.php");
?>