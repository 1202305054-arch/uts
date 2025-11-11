<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<?php
include 'config.php';
//tambah
$nama = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$lokasi = $_POST['lokasi'];
$kondisi = $_POST['kondisi'];

mysqli_query($koneksi, "INSERT INTO barang VALUES (
    '', '$nama', '$jumlah', '$lokasi', '$kondisi'
)");

header("location:index.php");
?>
