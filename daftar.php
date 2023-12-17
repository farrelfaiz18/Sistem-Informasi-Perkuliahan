<?php
include 'koneksi.php';
    if (isset($_GET["submit"])) {

    // ambil nilai nama
    $nama = ($_GET["nama"]);

    // filter untuk $nama untuk mencegah sql injection
    $nama = mysqli_real_escape_string($conn, $nama);

    // buat query pencarian
    $query  = "SELECT * FROM mhs_web WHERE nama LIKE '%$nama%' ";
    $query .= "ORDER BY nama ASC";

    // buat pesan
    $pesan = "Hasil pencarian untuk nama <b>\"$nama\" </b>:";
} else {
    // bukan dari form pencairan
    // siapkan query untuk menampilkan seluruh data dari tabel mahasiswa
    $query = "SELECT * FROM mhs_web ORDER BY nama ASC";
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/data_mahasiswa.css">
    <title>Header Website</title>
    <style>
         form {
        margin-top: 20px;
    }

    /* Selector untuk input text */
    input[type="text"],
    input[type="date"],
    textarea {
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 100%;
    }

    /* Selector untuk tombol submit */
    input[type="submit"] {
        padding: 10px 20px;
        background-color: #4CAF50;
        border: none;
        color: white;
        cursor: pointer;
        border-radius: 4px;
    }

    /* Selector untuk tabel dalam form */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table td {
        padding: 5px;
    }

    /* Selector untuk select dropdown */
    select {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
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
        <h2>Halaman Daftar</h2>
        <form method="POST" action="daftar_process.php">
            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required><br><br>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br><br>

            <label for="tgl_lahir">Tanggal Lahir:</label>
            <input type="date" id="tgl_lahir" name="tgl_lahir" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <input type="submit" value="Daftar">
        </form>
            <p>Sudah punya akun? <a href="index.php">Silahkan login</a></p>
            </div>
    </div>
    
<html>

