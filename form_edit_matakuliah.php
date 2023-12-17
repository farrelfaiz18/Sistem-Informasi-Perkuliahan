<?php
    include 'koneksi.php';

    if(isset($_GET['kode'])) {
        $kode = $_GET['kode'];
        $query = mysqli_query($conn, "SELECT * FROM matkul_web WHERE kode='$kode'");
        $data = mysqli_fetch_assoc($query);
    } else {
        header('Location: data_matakuliah.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/form_edit.css">
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
        <!-- form edit matakuliah berdasarkan tabel pada file data_matakuliah.php-->
            <form action="update_matakuliah.php" method="POST">
                <table>
                    <tr>
                        <td>KODE</td>
                        <td>:</td>
                        <td><input type="text" name="kode" value="<?php echo $data['kode']; ?>" readonly></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" value="<?php echo $data['nama']; ?>"></td>
                    </tr>
                    <tr>
                        <td>DOSEN</td>
                        <td>:</td>
                        <td><input type="text" name="dosen" value="<?php echo $data['dosen']; ?>"></td>
                    </tr>
                    <tr>
                        <td>KELAS</td>
                        <td>:</td>
                        <td><input type="text" name="kelas" value="<?php echo $data['kelas']; ?>"></td>
                    </tr>
                    <tr>
                        <td>JENIS KELAS</td>
                        <td>:</td>
                        <td><input type="text" name="jenis_kelas" value="<?php echo $data['jenis_kelas']; ?>"></td>
                    </tr>
                    <tr>
                        <td>W/P</td>
                        <td>:</td>
                        <td><input type="text" name="wp" value="<?php echo $data['wp']; ?>"></td>
                    </tr>
                    <tr>
                        <td>SKS</td>
                        <td>:</td>
                        <td><input type="text" name="sks" value="<?php echo $data['sks']; ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><input type="submit" value="Simpan"></td>
                    </tr>
                </table>
            </form>
        
        </div>
    </div>
    
<html>

