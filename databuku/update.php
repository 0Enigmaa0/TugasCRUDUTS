<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$no = $_POST['Nom'];
$id = $_POST['ID_buku'];
$judul = $_POST['Judul'];
$pengarang = $_POST['Pengarang'];
$status = $_POST['Status'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE data_buku SET ID_buku = '$id', Judul = '$judul', Pengarang = '$pengarang', Status = '$status' WHERE ID_buku = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: sdata_buku.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>