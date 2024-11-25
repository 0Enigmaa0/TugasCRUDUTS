<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nim = $_POST['NIM'];
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];
$No_telp = $_POST['No_telp'];
$email = $_POST['Email'];

// menginput data ke database
mysqli_query($koneksi, "insert into mahasiswa(NIM,Nama,Alamat,No_telp,Email) values('$nim','$nama','$alamat', '$No_telp','$email')");
 
// mengalihkan halaman kembali ke index.php
header("location:tampil.php");
    
?>