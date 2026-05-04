<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "aplikasi_pengelolaan_buku";

$conn = new mysqli($host, $user, $pass, $db);

// Cek error koneksi
if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}
?>