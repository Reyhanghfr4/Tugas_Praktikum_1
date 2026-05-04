<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("Location: login.php?pesan=belum_login");
    exit();
}

include 'koneksi.php';
$sql    = "SELECT * FROM buku";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>
    <h2>Daftar Koleksi Buku</h2>
    <a href="tambah.php">[+] Tambah Buku Baru</a> | 
    <a href="logout.php" onclick="return confirm('Apakah Anda yakin ingin logout?')">Logout</a>
    <br><br>
    
    <?php if (isset($_GET['pesan'])): ?>
        <p style="color: green; font-weight: bold;">
            <?php 
                if ($_GET['pesan'] == "update_sukses") echo "Data berhasil diperbarui!";
                if ($_GET['pesan'] == "hapus_sukses") echo "Data berhasil dihapus!";
            ?>
        </p>
    <?php endif; ?>

    <table border="1" cellpadding="10">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo htmlspecialchars($row['Judul']); ?></td>
            <td><?php echo htmlspecialchars($row['Penulis']); ?></td>
            <td><?php echo number_format($row['Harga'], 2); ?></td>
            <td><?php echo $row['Stok']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['ID']; ?>">Edit</a> |
                <a href="hapus.php?id=<?php echo $row['ID']; ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
<?php $conn->close(); ?>