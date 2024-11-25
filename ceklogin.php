<?php 
    session_start();
    include 'koneksi.php';

    // Menangkap data yang dikirim dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menyeleksi data pada tabel login dengan username dan password yang sesuai
    $data = mysqli_query($koneksi, "SELECT * FROM login WHERE username='$username' AND password='$password'");

    // Menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);

    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:tampil.php");
    }
    else{
        echo "<script> alert('Login gagal! Username dan password tidak benar');</script>";
        echo "<script> window.location = 'login.php';</script>";
    }
?>
