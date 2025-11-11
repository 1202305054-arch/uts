<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
  <div class="container d-flex justify-content-between">
    <a class="navbar-brand" href="#">Sistem Pinjam Barang</a>
    <a href="logout.php" class="btn btn-outline-light btn-sm">Logout</a>
  </div>
</nav>


<div class="container mt-4">
    <a href="tambah.php" class="btn btn-primary mb-3">+ Tambah Barang</a>

    <div class="card">
        <div class="card-header">Data Barang</div>
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <tr class="table-dark">
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Lokasi</th>
                    <th>Kondisi</th>
                    <th>Aksi</th>
                </tr>

                <?php
                $data = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY id DESC");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?= $d['id']; ?></td>
                    <td><?= $d['nama_barang']; ?></td>
                    <td><?= $d['jumlah']; ?></td>
                    <td><?= $d['lokasi']; ?></td>
                    <td><?= $d['kondisi']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $d['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="hapus.php?id=<?= $d['id']; ?>" class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin hapus data?');">Hapus</a>
                    </td>
                </tr>
                <?php } ?>

            </table>

        </div>
    </div>
</div>

</body>
</html>
