<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<?php
include 'config.php';
//hapus
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM barang WHERE id='$id'");

header("location:index.php");
?>
