<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<?php
include 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$lokasi = $_POST['lokasi'];
$kondisi = $_POST['kondisi'];

mysqli_query($koneksi, "UPDATE barang SET 
    nama_barang='$nama',
    jumlah='$jumlah',
    lokasi='$lokasi',
    kondisi='$kondisi'
    WHERE id='$id'
");

header("location:index.php");
?>
