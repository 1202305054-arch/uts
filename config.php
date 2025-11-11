<?php
$koneksi = mysqli_connect("localhost", "root", "", "barang_app");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
<?php
session_start();
