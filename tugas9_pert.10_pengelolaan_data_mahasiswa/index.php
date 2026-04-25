<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-4">
    <h2>Daftar Mahasiswa</h2>
    <a href="tambah.php" class="btn btn-primary mb-3">Tambah Mahasiswa</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Angkatan</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM mahasiswa";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>".htmlspecialchars($row['nim'])."</td>
                    <td>".htmlspecialchars($row['nama'])."</td>
                    <td>".htmlspecialchars($row['prodi'])."</td>
                    <td>".$row['angkatan']."</td>
                    <td>".htmlspecialchars($row['email'])."</td>
                    <td>
                        <a href='edit.php?id=".$row['id']."' class='btn btn-warning btn-sm'>Edit</a>
                        <a href='hapus.php?id=".$row['id']."' class='btn btn-danger btn-sm' onclick='return confirm(\"Hapus data?\")'>Hapus</a>
                    </td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>