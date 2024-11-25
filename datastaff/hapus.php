<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['ID_staff'];
 
 
// menghapus data dari database
mysqli_query($koneksi,"delete from staff where ID_staff ='$id'");

 
// mengalihkan halaman kembali ke index.php
header("location:../staff.php");
 
?>