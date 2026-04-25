<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$stmt = $conn->prepare("INSERT INTO mahasiswa (nim, nama, prodi, angkatan, email) VALUES (?, ?, ?, ?, ?)");
    
    $stmt->bind_param("sssis", $_POST['nim'], $_POST['nama'], $_POST['prodi'], $_POST['angkatan'], $_POST['email']);
    
    if ($stmt->execute()) {
        echo "<script>alert('Data Berhasil Ditambah!'); window.location='index.php';</script>";
    } else {
        echo "Gagal menambah data: " . $stmt->error;
    }
    
    $stmt->close();
    $conn->close();
}
?>