<!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f4e7d3; /* Warna latar belakang krem */
            font-family: 'Raleway', sans-serif;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: rgba(255, 247, 230, 0.9); /* Warna putih pudar */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h1 {
            font-family: 'Dancing Script', cursive;
            text-align: center;
            color: #774936; /* Warna coklat tua */
            margin-bottom: 30px;
            font-size: 2.5em;
        }
        label {
            color: #774936; /* Warna teks label coklat */
        }
        .form-control {
            background-color: rgba(255, 255, 255, 0.6);
            color: #333;
            border: 1px solid #d9b9a6;
        }
        .form-control::placeholder {
            color: #bbb;
        }
        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.8);
            border-color: #774936;
            box-shadow: 0 0 5px rgba(119, 73, 54, 0.5);
        }
        .btn-outline-success {
            background-color: #6b8e23; /* Hijau zaitun */
            color: #fff;
            border: none;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }
        .btn-outline-success:hover {
            background-color: #556b2f;
        }
        .btn-warning {
            background-color: #c24e3a; /* Merah vintage */
            color: #fff;
            border: none;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }
        .btn-warning:hover {
            background-color: #a6402e;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Update Data</h1>
        <?php
        include 'koneksi.php';
        
        // Cek apakah parameter NIM ada
        if (isset($_GET['NIM'])) {
            $nim = $_GET['NIM'];
            $data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE NIM = '$nim'");
            
            // Jika data ditemukan
            if (mysqli_num_rows($data) > 0) {
                $d = mysqli_fetch_array($data);
                ?>
                <form method="post" action="update.php">
                    <div class="mb-3">
                        <label for="NIM">NIM</label>
                        <input type="hidden" class="form-control" id="Nom" name="Nom" value="<?= $d['Nom']; ?>" readonly>
						<input type="text" class="form-control" id="NIM" name="NIM" value="<?= $d['NIM']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Nama">Nama</label>
                        <input type="text" class="form-control" id="Nama" name="Nama" value="<?= $d['Nama']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Alamat">Alamat</label>
                        <input type="text" class="form-control" id="Alamat" name="Alamat" value="<?= $d['Alamat']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="No_Telp">No. Telp</label>
                        <input type="text" class="form-control" id="No_telp" name="No_telp" value="<?= $d['No_telp']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control" id="Email" name="Email" value="<?= $d['Email']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-outline-success w-100 mb-2">Simpan</button>
                    <a href="tampil.php" class="btn btn-warning w-100">Kembali</a>
                </form>
                <?php
            } else {
                echo "Data tidak ditemukan!";
            }
        } else {
            echo "NIM tidak disertakan!";
        }
        ?>
    </div>
</body>
</html>