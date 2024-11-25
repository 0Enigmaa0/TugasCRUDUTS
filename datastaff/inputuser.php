<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['ID_staff'];
$nama = $_POST['Nama'];
$no_telp = $_POST['No_telp'];


// menginput data ke database
mysqli_query($koneksi, "insert into staff(ID_staff,Nama,No_telp) values('$id','$nama','$no_telp')");
 
// mengalihkan halaman kembali ke index.php
header("location:../staff.php");
    
?>