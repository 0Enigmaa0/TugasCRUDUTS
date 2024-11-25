<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$no = $_POST['Nom'];
$id = $_POST['ID_pinjam'];
$idstaff = $_POST['ID_staff'];
$idbuku = $_POST['ID_buku'];
$NIM = $_POST['NIM'];
$tglpinjam = $_POST['tgl_pinjam'];
$tglkembali = $_POST['tgl_kembali'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE data_peminjaman SET ID_pinjam = '$id', ID_staff = '$idstaff', ID_buku = '$idbuku', NIM = '$NIM', tgl_pinjam = '$tglpinjam',tgl_kembali = '$tglkembali' WHERE ID_pinjam = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: ../datapinjam.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!". $koneksi->error;
}

?>