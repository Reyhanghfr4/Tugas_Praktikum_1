<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("Location: login.php?pesan=belum_login");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h2>Tambah Buku Baru</h2>
    <form action="proses_tambah.php" method="POST">
        Judul: <input type="text" name="judul" required><br>
        Penulis: <input type="text" name="penulis" required><br>
        Tahun Terbit: <input type="number" name="tahun"><br>
        Harga: <input type="number" step="0.01" name="harga"><br>
        Stok: <input type="number" name="stok"><br>
        <button type="submit">Simpan Buku</button>
    </form>
    <br>
    <a href="index.php">Batal dan Kembali</a>
</body>
</html>