<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") exit("Akses Ditolak");
include 'koneksi.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $stmt = $conn->prepare("DELETE FROM mahasiswa WHERE id = ?");
    $stmt->bind_param("i", $_GET['id']);
    
    if ($stmt->execute()) {
        echo "<script>alert('Data Terhapus!'); window.location='index.php';</script>";
    }
    $stmt->close();
}
$conn->close();
?>