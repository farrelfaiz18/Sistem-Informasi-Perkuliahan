<?php
// Mengambil data dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$tgl_lahir = $_POST['tgl_lahir'];
$email = $_POST['email'];
$password = $_POST['password'];

// Koneksi ke database
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "fmipa2";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

// Query untuk menyimpan data pengguna
$sql = "INSERT INTO users (nama, username, tgl_lahir, email, password)
        VALUES ('$nama', '$username', '$tgl_lahir', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Pendaftaran berhasil!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

// Redirect kembali ke halaman login
header("Location: index.php");
exit();
?>
