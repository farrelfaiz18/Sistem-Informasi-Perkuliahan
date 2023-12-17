<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
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

    // Query untuk memeriksa kecocokan username dan password
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Jika ditemukan kecocokan, user dianggap berhasil login
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else {
        echo "Username atau password salah.";
        echo "<br>";
        echo "<a href='index.php'>Kembali</a>";
    }

    $conn->close();
}
?>
