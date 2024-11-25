<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['ID_buku'];
$judul = $_POST['Judul'];
$pengarang = $_POST['Pengarang'];
$status = $_POST['Status'];

// menginput data ke database
mysqli_query($koneksi, "insert into data_buku(ID_buku,judul,pengarang,status) values('$id','$judul','$pengarang', '$status')");
 
// mengalihkan halaman kembali ke index.php
header("location:data_buku.php");
    
?>