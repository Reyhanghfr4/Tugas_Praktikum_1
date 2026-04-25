<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul   = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun   = $_POST['tahun'];
    $harga   = $_POST['harga'];
    $stok    = $_POST['stok'];

    // Gunakan Prepared Statement (s=string, i=integer, d=double)
    $stmt = $conn->prepare("INSERT INTO buku (Judul, Penulis, Tahun_Terbit, Harga, stok) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssidi", $judul, $penulis, $tahun, $harga, $stok);

    if ($stmt->execute()) {
        echo "Data berhasil ditambah! <a href='index.php'>Kembali</a>";
    } else {
        echo "Gagal menambah data: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>