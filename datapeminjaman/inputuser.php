<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['ID_pinjam'];
$idbuku = $_POST['ID_buku'];
$idstaff = $_POST['ID_staff'];
$nim = $_POST['NIM'];
$pinjam = $_POST['tgl_pinjam'];
$kembali = $_POST['tgl_kembali'];


// menginput data ke database
mysqli_query($koneksi, "insert into data_peminjaman(ID_pinjam,ID_buku,ID_staff,NIM,tgl_pinjam,tgl_kembali) values('$id','$idbuku','$idstaff', '$nim','$pinjam','$kembali')");
 
// mengalihkan halaman kembali ke index.php
header("location:../datapinjam.php");
    
?>