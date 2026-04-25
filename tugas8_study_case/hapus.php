<?php
include 'koneksi.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM buku WHERE ID = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: index.php?pesan=hapus_sukses");
    } else {
        echo "Gagal menghapus data.";
    }
    $stmt->close();
}
$conn->close();
?>