<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$no = $_POST['Nom'];
$id = $_POST['ID_staff'];
$no_telp = $_POST['No_telp'];
$nama = $_POST['Nama'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE staff SET ID_staff = '$id', Nama = '$nama', No_telp = '$no_telp' WHERE ID_staff = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: ../staff.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>