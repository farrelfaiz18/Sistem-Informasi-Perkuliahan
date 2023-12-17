<?php
//koneksi ke database
include 'koneksi.php';
//menambahkan data ke tabel mahasiswa
if (isset($_POST['submit'])) {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $dosen = $_POST['dosen'];
    $kelas = $_POST['kelas'];
    $jenis_kelas = $_POST['jenis_kelas'];
    $wp = $_POST['wp'];
    $sks = $_POST['sks'];
    $query = "INSERT INTO matkul_web VALUES ('$kode', '$nama', '$dosen', '$kelas', '$jenis_kelas', '$wp', '$sks')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header('Location: data_matakuliah.php');
    } else {
        echo "Gagal menambahkan data";
    }
}
    
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/form_tambah.css">
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
            <h2>Form Tambah Data Mata Kuliah</h2>
	        <form action="tambah_matakuliah.php" method="POST">
                <table>
                    <tr>
                        <td>KODE</td>
                        <td><input type="text" name="kode" size="100%"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" size="100%"></td>
                    </tr>
                    <tr>
                        <td>DOSEN</td>
                        <td><input type="text" name="dosen" size="100%"></td>
                    </tr>
                    <tr>
                        <td>KELAS</td>
                        <td>
                            <select name="kelas">
                                <option value="1">A</option>
                                <option value="2">B</option>
                                <option value="3">C</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>JENIS_KELAS</td>
                        <td><select name="jenis_kelas">
                                <option value="1">REGULER</option>
                                <option value="2">NON REGULER</option>
                        </select></td> 

                    </tr>
                    <tr>
                        <td>W/P</td>
                        <td><input type="text" name="wp" size="100%"></td>
                    <tr>
                        <td>SKS</td>
                        <td><input type="text" name="sks" size="100%"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Tambah Data"></td>
                    </tr>

                </table>
            </form>
            
        </div>
    </div>
    
<html>

