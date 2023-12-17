<?php
//koneksi ke database
include 'koneksi.php';
//menambahkan data ke tabel mahasiswa
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $prodi = $_POST['prodi'];
    $status = $_POST['status'];
    $query = "INSERT INTO mhs_web VALUES ('$nim', '$nama', '$jenis_kelamin', '$agama', '$tgl_lahir', '$prodi', '$status')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header('Location: data_mahasiswa.php');
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
            <h2>Form Tambah Data Mahasiswa</h2>
	        <form action="tambah.php" method="POST">
                <table>
                    <tr>
                        <td>NIM</td>
                        <td><input type="text" name="nim" size="100%"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" size="100%"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <input type="radio" name="jenis_kelamin" value="0" checked>Perempuan
                            <input type="radio" name="jenis_kelamin" value="1">Laki-Laki
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>
                            <select name="agama">
                                <option value="1">Islam</option>
                                <option value="2">Kristen</option>
                                <option value="3">Khatolik</option>
                                <option value="4">Hindu</option>
                                <option value="5">Budha</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td><input type="date" name="tgl_lahir"></td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td>
                            <select name="prodi">
                                <option value="603125">Manajemen Informatika</option>
                                <option value="603124">Sistem Informasi</option>
                                <option value="603126">Fisika</option>
                                <option value="603127">Kimia</option>
                                <option value="603128">Biologi</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <select name="status">
                                <option value="1">Aktif</option>
                                <option value="2">Cuti</option>
                                <option value="3">Alpa Studi</option>
                                <option value="4">Semhas</option>
                                <option value="5">Kompre</option>
                                <option value="6">Alumni</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td><textarea name="alamat"></textarea></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Simpan"></td>
                    </tr>
                </table>
            </form>
            
        </div>
    </div>
    
<html>

