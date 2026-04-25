<?php
include 'koneksi.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $stmt = $conn->prepare("DELETE FROM mahasiswa WHERE id = ?");
    $stmt->bind_param("i", $_GET['id']);
    
    if ($stmt->execute()) {
        echo "<script>alert('Data Terhapus!'); window.location='index.php';</script>"; [cite: 269]
    }
    $stmt->close();
}
$conn->close(); [cite: 129]
?>