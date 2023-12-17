<?php
//koneksi ke database
include 'koneksi.php';
//menangkap data yang diinputkan dari form edit mata kuliah
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$dosen = $_POST['dosen'];
$kelas = $_POST['kelas'];
$jenis_kelas = $_POST['jenis_kelas'];
$wp = $_POST['wp'];
$sks = $_POST['sks'];
//query untuk menambahkan data ke dalam tabel
$sql = "UPDATE matkul_web SET nama='$nama', dosen='$dosen', kelas='$kelas', jenis_kelas='$jenis_kelas', wp='$wp', sks='$sks' WHERE kode='$kode'";
$result = mysqli_query($conn, $sql);
//pesan jika data berhasil ditambahkan
if($result){
    echo "<br>Data berhasil diubah";
    header("Location: data_matakuliah.php");
}else{
    echo "Data gagal diubah";
}
?>