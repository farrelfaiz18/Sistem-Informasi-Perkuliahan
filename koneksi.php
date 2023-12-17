<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "fmipa2";
    $conn = mysqli_connect($host, $user, $password, $database);
    if($conn){
        
    }
    else{
        echo "koneksi gagal";
    }
    
?>