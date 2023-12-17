<?php
//koneksi ke database
include 'koneksi.php';
//menangkap data dari form pada password.php
$passwordLama = $_POST['password_lama'];
$passwordBaru = $_POST['password_baru'];
$konfirmasiPassword = $_POST['ulangi_password_baru'];
//query untuk menambahkan data ke dalam tabel
$sql = "UPDATE users SET password='$passwordBaru' WHERE password='$passwordLama'";
$result = mysqli_query($conn, $sql);
//pesan jika data berhasil ditambahkan
if($result){
    echo "<br>Data berhasil diubah";
    header("Location: index.php");
}else{
    echo "Data gagal diubah";
}

?>