<?php
// Inisialisasi variabel
$npm = $nama = $prodi = "";
$semester = 0;
$biaya_ukt = 0;
$persen_diskon = 0;
$nominal_diskon = 0;
$total_bayar = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $biaya_ukt = $_POST['biaya_ukt'];

    // Logika penentuan diskon berdasarkan ketentuan poin b & c
    if ($biaya_ukt >= 5000000) {
        if ($semester > 8) {
            // Jika UKT >= 5jt DAN semester > 8
            $persen_diskon = 15;
        } else {
            // Jika UKT >= 5jt tapi semester <= 8
            $persen_diskon = 10;
        }
    } else {
        $persen_diskon = 0;
    }

    // Perhitungan matematika
    $nominal_diskon = ($persen_diskon / 100) * $biaya_ukt;
    $total_bayar = $biaya_ukt - $nominal_diskon;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Praktikum Dua - Diskon UKT</title>
</head>
<body>

    <h2>Menu Diskon Pembayaran Mahasiswa</h2>
    <form method="post" action="">
        NPM: <input type="text" name="npm" required><br><br>
        Nama: <input type="text" name="nama" required><br><br>
        Prodi: <input type="text" name="prodi" required><br><br>
        Semester: <input type="number" name="semester" required><br><br>
        Biaya UKT (Rp): <input type="number" name="biaya_ukt" required><br><br>
        <input type="submit" value="Hitung Diskon">
    </form>

    <br>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th colspan="2">Hasil Perhitungan Pembayaran</th>
            </tr>
            <tr>
                <td>NPM</td>
                <td>: <?php echo htmlspecialchars($npm); ?></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td>: <?php echo htmlspecialchars($nama); ?></td>
            </tr>
            <tr>
                <td>PRODI</td>
                <td>: <?php echo htmlspecialchars($prodi); ?></td>
            </tr>
            <tr>
                <td>SEMESTER</td>
                <td>: <?php echo $semester; ?></td>
            </tr>
            <tr>
                <td>BIAYA UKT</td>
                <td>: Rp. <?php echo number_format($biaya_ukt, 0, ',', '.'); ?>,-</td>
            </tr>
            <tr>
                <td>DISKON</td>
                <td>: <?php echo $persen_diskon; ?>% (Rp. <?php echo number_format($nominal_diskon, 0, ',', '.'); ?>)</td>
            </tr>
            <tr>
                <td><strong>YANG HARUS DIBAYAR</strong></td>
                <td>: <strong>Rp. <?php echo number_format($total_bayar, 0, ',', '.'); ?>,-</strong></td>
            </tr>
        </table>
    <?php endif; ?>

</body>
</html>