<?php 
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">
    <h2>Tambah Mahasiswa Baru</h2>
    <form action="proses_tambah.php" method="POST" class="mt-4">
        <input type="text" name="nim" placeholder="NIM" class="form-control mb-2" required>
        <input type="text" name="nama" placeholder="Nama" class="form-control mb-2" required>
        <input type="text" name="prodi" placeholder="Prodi" class="form-control mb-2" required>
        <input type="number" name="angkatan" placeholder="Angkatan" class="form-control mb-2" required>
        <input type="email" name="email" placeholder="Email" class="form-control mb-2" required>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Batal</a>
    </form>
</body>
</html>