<?php
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$cek = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");

if (mysqli_num_rows($cek) > 0) {

    $_SESSION['login'] = true;
    $_SESSION['username'] = $username;

    header("location:index.php");
} else {
    header("location:login.php?msg=gagal");
}
?>
