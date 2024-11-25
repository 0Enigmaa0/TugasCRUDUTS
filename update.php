<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$no = $_POST['Nom'];
$nim = $_POST['NIM'];
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];
$no_telp = $_POST['No_telp'];
$email = $_POST['Email'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE mahasiswa SET NIM = '$nim', Nama = '$nama', Alamat = '$alamat', No_telp = '$no_telp', Email ='$email' WHERE NIM = '$nim'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tampil.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>