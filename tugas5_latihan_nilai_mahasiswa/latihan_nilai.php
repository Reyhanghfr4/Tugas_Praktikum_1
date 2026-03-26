<?php
// Inisialisasi variabel agar tidak muncul error saat halaman pertama kali dimuat
$nama = "";
$nilai = "";
$predikat = "";
$status = "";

// Cek apakah form sudah disubmit menggunakan method POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];

    // Logika penentuan Predikat berdasarkan rentang nilai (Halaman 90)
    if ($nilai >= 85 && $nilai <= 100) {
        $predikat = "A";
    } elseif ($nilai >= 75 && $nilai < 85) {
        $predikat = "B";
    } elseif ($nilai >= 65 && $nilai < 75) {
        $predikat = "C";
    } elseif ($nilai >= 50 && $nilai < 65) {
        $predikat = "D";
    } elseif ($nilai >= 0 && $nilai < 50) {
        $predikat = "E";
    } else {
        $predikat = "Tidak valid";
    }

    // Logika penentuan Status Lulus (Halaman 91 - Luaran yang diharapkan)
    // Asumsi: Lulus jika nilai >= 65 (Predikat A, B, atau C)
    if ($nilai >= 65 && $nilai <= 100) {
        $status = "Lulus";
    } else {
        $status = "Tidak Lulus";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Praktikum PHP</title>
</head>
<body>

    <h2>Form Input Nilai Mahasiswa</h2>
    <form method="post" action="">
        Nama: <input type="text" name="nama" required><br><br>
        Nilai: <input type="number" name="nilai" required><br><br>
        <input type="submit" value="Proses">
    </form>

    <br>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th colspan="2">Laporan Nilai Mahasiswa</th>
            </tr>
            <tr>
                <td>Nama</td>
                <td>: <?php echo htmlspecialchars($nama); ?></td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td>: <?php echo $nilai; ?></td>
            </tr>
            <tr>
                <td>Predikat</td>
                <td>: <?php echo $predikat; ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>: <?php echo $status; ?></td>
            </tr>
        </table>
    <?php endif; ?>

</body>
</html>