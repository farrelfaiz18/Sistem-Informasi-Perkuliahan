<?php
include 'koneksi.php';
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
            <!-- menampilkan daftar user yang tersimpan pada database pada tabel users di database fmipa2 -->
            <h2>Daftar User</h2>
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Tanggal Lahir</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // buat query untuk menampilkan seluruh data dari tabel users
                    $query = "SELECT * FROM users ORDER BY username ASC";
                    $result = mysqli_query($conn, $query);
                    if(!$result){
                        die ("Query Error: ".mysqli_errno($conn).
                            " - ".mysqli_error($conn));
                    }

                    //buat perulangan untuk element tabel dari data users
                    $no = 1; //variabel untuk membuat nomor urut
                    // hasil query akan disimpan dalam variabel $data dalam bentuk array
                    // kemudian dicetak dengan perulangan while
                    while($row = mysqli_fetch_assoc($result))
                    {
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['tgl_lahir']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                    </tr>
                    <?php
                        $no++; //untuk nomor urut terus bertambah 1
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<html>

