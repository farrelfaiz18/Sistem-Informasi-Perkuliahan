<?php
// delete.php

include 'koneksi.php';

if(isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $delete_query = mysqli_query($conn, "DELETE FROM mhs_web WHERE nim='$nim'");

    if($delete_query) {
        echo "Data berhasil dihapus";
        header("Location: data_mahasiswa.php");
    } else {
        echo "Data gagal dihapus";
    }
}
?>
