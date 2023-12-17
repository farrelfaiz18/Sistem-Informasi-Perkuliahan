<?php
include 'koneksi.php';
    if (isset($_GET["submit"])) {

    // ambil nilai nama
    $nama = ($_GET["nama"]);

    // filter untuk $nama untuk mencegah sql injection
    $nama = mysqli_real_escape_string($conn, $nama);

    // buat query pencarian
    $query  = "SELECT * FROM matkul_web WHERE nama LIKE '%$nama%' ";
    $query .= "ORDER BY nama ASC";

    // buat pesan
    $pesan = "Hasil pencarian untuk nama <b>\"$nama\" </b>:";
} else {
    // bukan dari form pencairan
    // siapkan query untuk menampilkan seluruh data dari tabel mahasiswa
    $query = "SELECT * FROM matkul_web ORDER BY nama ASC";
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/data_dosen.css">
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
            <a href="form_tambah_matkul.php">Tambah Data</a>
            <input type="file">
            <button>Import</button>
            <form id="search" action="data_matakuliah.php" method="get">
                <p>
                    <label for="nim">Nama : </label>
                    <input type="text" name="nama" id="nama" placeholder="search...">
                    <input type="submit" name="submit" value="Search">
                </p>
            </form>
            <br><br>
            <table border="1" cellpadding="3" cellspacing="3" width="1200px" style="border-collapse: collapse;">
                <tr>
                    <th>NO</th>
                    <th>KODE</th>
                    <th>NAMA</th>
                    <th>DOSEN</th>
                    <th>KELAS</th>
                    <th>JENIS KELAS</th>
                    <th>W/P</th>
                    <th>SKS</th>
                    <th>AKSI</th>
                </tr>
                <?php
                
                $matkul = mysqli_query($conn, $query);
                $no=1;
                foreach ($matkul as $row){
                    echo"<tr>
                        <td style='text-align:center;'>$no</td>
                        <td style='text-align:center;'>".$row['kode']."</td>
                        <td>".$row['nama']."</td>
                        <td>".$row['dosen']."</td>
                        <td style='text-align:center;'>".$row['kelas']."</td>
                        <td style='text-align:center;'>".$row['jenis_kelas']."</td>
                        <td style='text-align:center;'>".$row['wp']."</td>
                        <td style='text-align:center;'>".$row['sks']."</td>
                        <td style='text-align:center;'>
                            <a href=form_edit_matakuliah.php?kode=$row[kode] style='text-decoration:none;'>Edit</a>&nbsp;|&nbsp;
                            <a href=delete_matakuliah.php?kode=$row[kode] style='text-decoration:none;'>Delete</a>
                        </td>
                    </tr>";
                    $no++;
                }
                ?>
            </table>
        </div>
    </div>
    
<html>

