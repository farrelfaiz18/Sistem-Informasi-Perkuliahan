
<?php
//koneksi ke database
include 'koneksi.php';

//menangkap data yang diinputkan
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$ttl = $_POST['tgl_lahir'];
$prodi = $_POST['prodi'];
$status = $_POST['status'];
$alamat = $_POST['alamat'];

//query untuk menambahkan data ke dalam tabel
$sql = "INSERT INTO mhs_web (nim, nama, jenis_kelamin, agama, tgl_lahir, prodi, status, alamat) VALUES ('$nim', '$nama', '$jk', '$agama', '$ttl', '$prodi', '$status', '$alamat')";
$result = mysqli_query($conn, $sql);

//pesan jika data berhasil ditambahkan
if($result){
    header('Location: data_mahasiswa.php');
}else{
    echo "Data gagal ditambahkan";
}
?>
<html>
    <body>
        <h2><a href="data_mahasiswa.php">Kembali ke halaman utama</a></h2>
    </body>
</html>

