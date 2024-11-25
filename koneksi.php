<?php

$koneksi = mysqli_connect(hostname: "localhost",username: "root",password: "",database: "t2ppbd");

if (mysqli_connect_errno()){
    echo "Koneksi database gagal: ". mysqli_connect_error();
}
?>s