<?php
//koneksi ke db
include 'koneksi.php';

//ambil data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

//update data ke db
mysqli_query($koneksi,"UPDATE member SET nama_member='$nama', alamat_member='$alamat', telp_member='$telepon' WHERE id_member='$id'");

//balik ke index.php
header("location:index.php");
?>