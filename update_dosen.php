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
$sql = "UPDATE dosen_web SET nama='$nama', jenis_kelamin='$jk', agama='$agama', tgl_lahir='$ttl', prodi='$prodi' WHERE nrp='$nrp'";
$result = mysqli_query($conn, $sql);

//pesan jika data berhasil ditambahkan
if($result){
    echo "<br>Data berhasil diubah";
    header("Location: data_dosen.php");
}else{
    echo "Data gagal diubah";
}
?>
<html>
    <body>
        <h2><a href="index.php">Index.php</a></h2>
    </body>
</html>
