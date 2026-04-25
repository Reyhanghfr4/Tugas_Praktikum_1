<?php
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
    <a href="tambah.php">[+] Tambah Buku Baru</a><br><br>
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