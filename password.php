<?php

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/data_mahasiswa.css">
    <title>Header Website</title>
    <style>
        .column-kiri ul {
        padding: 0;
        list-style: none;
    }

    .column-kiri li {
        margin-bottom: 10px;
    }

    .column-kiri a {
        display: block;
        padding: 10px 15px;
        text-decoration: none;
        color: #fff;
        background-color: #333;
        border-radius: 4px;
        transition: background-color 0.3s ease;
        font-family: Arial, sans-serif;
    }

    .column-kiri a:hover {
        background-color: #555;
    }

    .column-kiri a.active {
        background-color: #555;
    }

    /* Tambahkan warna dan gaya tambahan untuk tombol Tambah Data */
    .column-kiri a.btn-tambah {
        background-color: #4CAF50;
    }

    .column-kiri a.btn-tambah:hover {
        background-color: #45a049;
    }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="img/unri (1).png" alt="Logo">
        </div>
        <div class="title">Artificial Intelligence</div>
        <div class="navbar">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="daftar.php">Daftar</a></li>
                <li><a href="user.php">Lihat User</a></li>
                <li><a href="password.php">Tukar Password</a></li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="column column-kiri">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="data_mahasiswa.php">Data Mahasiswa</a></li>
                <li><a href="data_dosen.php">Data Dosen</a></li>
                <li><a href="data_matakuliah.php">Data Matakuliah</a></li>
            </ul>
        </div>
        <div class="column column-kanan table-container">
            <!-- mengganti password pada user yang sedang login sesuai dengan tabel users di db fmipa2 -->
            <h2>Tukar Password</h2>
            <form action="process_password.php" method="POST">
                <table>
                    <tr>
                        <td>Password Lama</td>
                        <td>:</td>
                        <td><input type="password" name="password_lama" placeholder="Password Lama"></td>
                    </tr>
                    <tr>
                        <td>Password Baru</td>
                        <td>:</td>
                        <td><input type="password" name="password_baru" placeholder="Password Baru"></td>
                    </tr>
                    <tr>
                        <td>Ulangi Password Baru</td>
                        <td>:</td>
                        <td><input type="password" name="ulangi_password_baru" placeholder="Ulangi Password Baru"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="Tukar Password"></td>
                    </tr>
                </table>

        </div>
    </div>
</body>
<html>

