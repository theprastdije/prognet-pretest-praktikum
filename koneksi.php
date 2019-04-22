<?php
$koneksi = mysqli_connect("localhost","root","","warnet_test");

//cek koneksi
if (mysqli_connect_errno()){
    echo "Koneksi ke database gagal!" . mysqli_connect_error();
}
?>