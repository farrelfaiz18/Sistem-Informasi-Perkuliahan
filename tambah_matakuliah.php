<!-- proses form_tambah_matakuliah -->
// <?php
//
include("koneksi.php");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['submit'])){
    // ambil data dari formulir
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $dosen = $_POST['dosen'];
    $kelas = $_POST['kelas'];
    $jenis_kelas = $_POST['jenis_kelas'];
    $wp = $_POST['wp'];
    $sks = $_POST['sks'];
    // buat query
    $sql = "INSERT INTO matkul_web (kode, nama, dosen, kelas, jenis_kelas, wp, sks) VALUE ('$kode', '$nama', '$dosen', '$kelas', '$jenis_kelas', '$wp', '$sks')";
    $query = mysqli_query($conn, $sql);
    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman data_matakuliah.php dengan status=sukses
        header('Location: data_matakuliah.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman data_matakuliah.php dengan status=gagal
        header('Location: data_matakuliah.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}
