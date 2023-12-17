<?php
    include 'koneksi.php';

    if(isset($_GET['nrp'])) {
        $nrp = $_GET['nrp'];
        $query = mysqli_query($conn, "SELECT * FROM dosen_web WHERE nrp='$nrp'");
        $data = mysqli_fetch_assoc($query);
    } else {
        header('Location: data_dosen.php');
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
        <h2>Edit Data Dosen</h2>
        <form action="update_dosen.php" method="POST" >
            <div class="form-group">
                <label>NRP:</label>
                <input type="text" name="nrp" value="<?php echo $data['nrp']; ?>" readonly>
            </div>
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" value="<?php echo $data['nama']; ?>">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin:</label>
                <select name="jenis_kelamin">
                    <option value="0" <?php if($data['jenis_kelamin'] == '0') echo 'selected'; ?>>Perempuan</option>
                    <option value="1" <?php if($data['jenis_kelamin'] == '1') echo 'selected'; ?>>Laki-Laki</option>
                </select>
            </div>
            <div class="form-group">
                <label>Agama:</label>
                <select name="agama">
                    <option value="1" <?php if($data['agama'] == '1') echo 'selected'; ?>>Islam</option>
                    <option value="2" <?php if($data['agama'] == '2') echo 'selected'; ?>>Kristen</option>
                    <option value="3" <?php if($data['agama'] == '3') echo 'selected'; ?>>Khatolik</option>
                    <option value="4" <?php if($data['agama'] == '4') echo 'selected'; ?>>Hindu</option>
                    <option value="5" <?php if($data['agama'] == '5') echo 'selected'; ?>>Budha</option>
                </select>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir:</label>
                <input type="date" name="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>">
            </div>
            <div class="form-group">
                <label>Program Studi:</label>
                <select name="prodi">
                    <option value="603125" <?php if($data['prodi'] == '603125') echo 'selected'; ?>>Sistem Informasi</option>
                    <option value="603124" <?php if($data['prodi'] == '603124') echo 'selected'; ?>>Manajemen Informatika</option>
                    <option value="603126" <?php if($data['prodi'] == '603126') echo 'selected'; ?>>Fisika</option>
                    <option value="603127" <?php if($data['prodi'] == '603127') echo 'selected'; ?>>Kimia</option>
                    <option value="603128" <?php if($data['prodi'] == '603128') echo 'selected'; ?>>Biologi</option>
                </select>
            </div>
            
           
            <button type="submit" name="update">Update</button>
        </form>
        </div>
    </div>
    
<html>

