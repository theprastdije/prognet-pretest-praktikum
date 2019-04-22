<?php
//koneksi db
include 'koneksi.php';

//menerima data dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

//query insert data ke db
mysqli_query($koneksi,"INSERT INTO member VALUES ('','$nama','$alamat','$telepon')");

//balik ke index.php
header("location:index.php");
?>