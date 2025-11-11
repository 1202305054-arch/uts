<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<?php include 'config.php';
//typo
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM barang WHERE id='$id'");
$d = mysqli_fetch_array($data);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container mt-4">
    <h3>Edit Barang</h3>
    <a href="index.php" class="btn btn-secondary mb-3">Kembali</a>

    <form action="update.php" method="POST">

        <input type="hidden" name="id" value="<?= $d['id']; ?>">

        <div class="mb-3">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" value="<?= $d['nama_barang']; ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Jumlah</label>
            <input type="number" name="jumlah" value="<?= $d['jumlah']; ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Lokasi</label>
            <input type="text" name="lokasi" value="<?= $d['lokasi']; ?>" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Kondisi</label>
            <select name="kondisi" class="form-select">
                <option <?= $d['kondisi']=='Baik'?'selected':'' ?>>Baik</option>
                <option <?= $d['kondisi']=='Rusak Ringan'?'selected':'' ?>>Rusak Ringan</option>
                <option <?= $d['kondisi']=='Rusak Berat'?'selected':'' ?>>Rusak Berat</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>
</div>

</body>
</html>
