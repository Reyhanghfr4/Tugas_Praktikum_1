<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi sederhana: username 'admin' dan password '123'
    if ($username == "Reyhan" && $password == "123") {
        $_SESSION['status'] = "login";
        header("Location: index.php");
        exit();
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Sistem Manajemen Buku</title>
</head>
<body>
    <h2>Login Admin</h2>
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    
    <?php if (isset($_GET['pesan']) && $_GET['pesan'] == "belum_login"): ?>
        <p style="color: orange;">Anda harus login terlebih dahulu untuk mengakses halaman.</p>
    <?php endif; ?>

    <form method="POST" action="">
        <label>Username:</label><br>
        <input type="text" name="username" required autocomplete="off"><br><br>
        
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>