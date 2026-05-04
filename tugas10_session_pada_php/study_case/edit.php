<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("Location: login.php?pesan=belum_login");
    exit();
}

include 'koneksi.php';
$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM buku WHERE ID = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>
    <h2>Edit Data Buku</h2>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['ID']; ?>">
        Judul: <input type="text" name="judul" value="<?php echo htmlspecialchars($data['Judul']); ?>"><br>
        Harga: <input type="number" step="0.01" name="harga" value="<?php echo $data['Harga']; ?>"><br>
        <button type="submit" name="submit">Update Data</button>
    </form>
    <br>
    <a href="index.php">Batal</a>
</body>
</html>
<?php 
$stmt->close();
$conn->close(); 
?>