<?php
session_start();
// Menghapus semua variabel session
$_SESSION = array();

// Menghancurkan session
session_destroy();

// Mengalihkan ke halaman login
header("Location: login.php");
exit();
?>