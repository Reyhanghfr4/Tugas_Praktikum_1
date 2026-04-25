<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $id    = $_POST['id'];
    $judul = $_POST['judul'];
    $harga = $_POST['harga'];

    $stmt = $conn->prepare("UPDATE buku SET Judul=?, Harga=? WHERE ID=?");
    $stmt->bind_param("sdi", $judul, $harga, $id);

    if ($stmt->execute()) {
        header("Location: index.php?pesan=update_sukses");
    } else {
        echo "Gagal update: " . $stmt->error;
    }
    $stmt->close();
}
$conn->close();
?>