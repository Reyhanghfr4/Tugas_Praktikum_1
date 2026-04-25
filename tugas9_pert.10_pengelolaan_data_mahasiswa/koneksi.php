<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "aplikasi_pengelolaan_data_mahasiswa";

$conn = new mysqli($host, $user, $pass, $db);

// Cek error koneksi [cite: 95]
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}
?>