
<?php
//koneksi ke database
include 'koneksi.php';

//menangkap data yang diinputkan
$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$jk = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$ttl = $_POST['tgl_lahir'];
$prodi = $_POST['prodi'];


//query untuk menambahkan data ke dalam tabel
$sql = "INSERT INTO dosen_web (nrp, nama, jenis_kelamin, agama, tgl_lahir, prodi) VALUES ('$nrp', '$nama', '$jk', '$agama', '$ttl', '$prodi')";
$result = mysqli_query($conn, $sql);

//pesan jika data berhasil ditambahkan
if($result){
    header('Location: data_dosen.php');
}else{
    echo "Data gagal ditambahkan";
}
?>
<html>
    <body>
        <h2><a href="data_dosen.php">Kembali ke halaman utama</a></h2>
    </body>
</html>

