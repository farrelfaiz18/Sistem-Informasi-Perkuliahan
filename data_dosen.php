<?php
include 'koneksi.php';
    if (isset($_GET["submit"])) {

    // ambil nilai nama
    $nama = ($_GET["nama"]);

    // filter untuk $nama untuk mencegah sql injection
    $nama = mysqli_real_escape_string($conn, $nama);

    // buat query pencarian
    $query  = "SELECT * FROM dosen_web WHERE nama LIKE '%$nama%' ";
    $query .= "ORDER BY nama ASC";

    // buat pesan
    $pesan = "Hasil pencarian untuk nama <b>\"$nama\" </b>:";
} else {
    // bukan dari form pencairan
    // siapkan query untuk menampilkan seluruh data dari tabel mahasiswa
    $query = "SELECT * FROM dosen_web ORDER BY nama ASC";
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
            <a href="form_tambah_dosen.php">Tambah Data</a>
            <input type="file">
            <button>Import</button>
            <form id="search" action="data_dosen.php" method="get">
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
                    <th>NRP</th>
                    <th>NAMA</th>
                    <th>JK</th>
                    <th>AGAMA</th>
                    <th>TGL. LAHIR</th>
                    <th>PRODI</th>
                    <th>Aksi</th>
                </tr>
                <?php
                
                $dosen = mysqli_query($conn, $query);
                $no=1;
                foreach ($dosen as $row){
                    $jenis_kelamin = $row['jenis_kelamin']=='0'?'Perempuan':'Laki-Laki';
                    echo"<tr>
                        <td style='text-align:center;'>$no</td>
                        <td style='text-align:center;'>".$row['nrp']."</td>
                        <td>".$row['nama']."</td>
                        <td>".$jenis_kelamin."</td>";

                    if($row['agama']==1){
                        $agama = 'Islam';
                    }else if($row['agama']==2){
                        $agama = 'Kristen';
                    }else if($row['agama']==3){
                        $agama = 'Khatolik';
                    }else if($row['agama']==4){
                        $agama = 'Hindu';
                    }else if($row['agama']==5){
                        $agama = 'Budha';
                    }
                    echo"<td>".$agama."</td>";
                    $tgl1 = substr($row['tgl_lahir'],8,2);
                    $bln1 = substr($row['tgl_lahir'],5,2);
                    $thn1 = substr($row['tgl_lahir'],0,4);

                    echo"<td style='text-align:center;'>".$tgl1."-".$bln1."-".$thn1."</td>";

                    if($row['prodi']=="603125"){
                        $prodi = "Sistem Informasi";
                    }else if($row['prodi']=="603124"){
                        $prodi = "Manajemen Informatika";
                    }else if($row['prodi']=="603126"){
                        $prodi = "Fisika";
                    }else if($row['prodi']=="603127"){
                        $prodi = "Kimia";
                    }else if($row['prodi']=="603128"){
                        $prodi = "Biologi";
                    }
                    echo"<td>".$prodi."</td>";

                    
                    echo"
                        <td style='text-align:center;'>
                            <a href=form_edit_dosen.php?nrp=$row[nrp] style='text-decoration:none;'>Edit</a>&nbsp;|&nbsp;
                            <a href=delete_dosen.php?nrp=$row[nrp] style='text-decoration:none;'>Delete</a>
                        </td>
                    </tr>";
                    $no++;
                }
                ?>
            </table>
        </div>
    </div>
    
<html>

