<?php 
session_start();
if (isset($_SESSION['login'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">

<div class="container mt-5" style="max-width: 450px;">
    <div class="card p-4 shadow">
        <h3 class="text-center mb-3">Login Sistem Barang</h3>

        <?php if (isset($_GET['msg']) && $_GET['msg'] == "gagal") { ?>
            <div class="alert alert-danger">Username atau password salah!</div>
        <?php } ?>

        <form action="login_aksi.php" method="POST">
            <div class="mb-3">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button class="btn btn-primary w-100" type="submit">Login</button>
        </form>
    </div>
</div>

</body>
</html>
