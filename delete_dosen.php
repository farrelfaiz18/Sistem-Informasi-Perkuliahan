<?php
// delete.php

include 'koneksi.php';

if(isset($_GET['nrp'])) {
    $nrp = $_GET['nrp'];
    $delete_query = mysqli_query($conn, "DELETE FROM dosen_web WHERE nrp='$nrp'");

    if($delete_query) {
        echo "Data berhasil dihapus";
        header("Location: data_dosen.php");
    } else {
        echo "Data gagal dihapus";
    }
}
?>
