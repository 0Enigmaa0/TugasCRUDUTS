<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['ID_buku'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from data_buku where ID_buku ='$id'");

 
// mengalihkan halaman kembali ke index.php
header("location:data_buku.php");
 
?>