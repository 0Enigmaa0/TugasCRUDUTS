<!DOCTYPE html>
<html>
<head>
    <title>Data Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Raleway:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f4e7d3; /* Warna latar belakang krem */
            font-family: 'Raleway', sans-serif;
            color: #333;
        }
        h1 {
            font-family: 'Dancing Script', cursive;
            text-align: center;
            color: #774936; /* Warna coklat tua */
            margin-bottom: 30px;
            font-size: 3em;
        }
        .table-container {
            background-color: rgba(255, 247, 230, 0.9); /* Warna putih pudar */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #774936; /* Warna coklat vintage */
            border: none;
            color: #fff;
        }
        .btn-primary:hover {
            background-color: #5a3524;
        }
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(229, 215, 196, 0.5); /* Warna krem muda */
        }
        .table-hover tbody tr:hover {
            background-color: #d9b9a6;
        }
        .btn-info {
            background-color: #6b8e23; /* Hijau zaitun */
            border: none;
            color: #fff;
        }
        .btn-info:hover {
            background-color: #556b2f;
        }
        .btn-danger {
            background-color: #c24e3a; /* Warna merah vintage */
            border: none;
        }
        .btn-danger:hover {
            background-color: #a6402e;
        }
        .line-art {
            display: flex;
            justify-content: center;
            margin-top: 50px;
            width: 100%;
        }
        .line-art span {
            display: inline-block;
            width: 6px;
            background-color: #774936;
            margin: 5px;
            animation: line-dance 1.5s infinite alternate;
        }
        .line-art span:nth-child(odd) {
            background-color: #c24e3a;
        }
        .line-art span:nth-child(1) { height: 50px; }
        .line-art span:nth-child(2) { height: 70px; animation-delay: 0.2s; }
        .line-art span:nth-child(3) { height: 90px; animation-delay: 0.4s; }
        .line-art span:nth-child(4) { height: 70px; animation-delay: 0.6s; }
        .line-art span:nth-child(5) { height: 50px; animation-delay: 0.8s; }
        @keyframes line-dance {
            0% { transform: translateY(0); }
            100% { transform: translateY(-15px); }
        }

        /* Navigasi */
        nav {
            background-color: #f4f4f4;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }
        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            margin: 0 15px;
        }
        nav ul li a {
            text-decoration: none;
            color: #774936;
            font-weight: bold;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        nav ul li a:hover {
            background-color: #774936;
            color: #fff;
        }
    </style>
</head>
<body>

    <!-- Navigasi -->
    <nav>
        <ul>
            <li><a href="tampil.php">Data Mahasiswa</a></li>
            <li><a href="databuku/data_buku.php">Data Buku</a></li>
            <li><a href="datapinjam.php">Data Peminjaman</a></li>
            <li><a href="staff.php">Staff</a></li>
        </ul>
    </nav>

    <div class="container mt-5">
        <h1>Data Staff</h1>
        <div class="table-container">
            <div class="table-responsive">
                <a href="datastaff/tambah.php" class="btn btn-primary mb-3">
                    <i class="fas fa-user-plus"></i> Tambah Data Staff
                </a>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th>ID Staff</th>
                            <th>Nama</th>
                            <th>No. Telp</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include 'koneksi.php';
                        $no = 1;
                        $data = mysqli_query($koneksi, "select * from staff");
                        while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td class="text-center"><?php echo $no++; ?></td>
                            <td><?php echo $d['ID_staff']; ?></td>
                            <td><?php echo $d['Nama']; ?></td>
                            <td><?php echo $d['No_telp']; ?></td>
                            <td class="text-center">
                                <a href="datastaff/ubah.php?ID_staff=<?php echo $d['ID_staff']; ?>" class="btn btn-sm btn-info">
                                    <i class="fas fa-edit"></i> Ubah
                                </a>
                                <a href="datastaff/hapus.php?ID_staff=<?php echo $d['ID_staff']; ?>" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                        <?php 
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="line-art">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</body>
</html>
