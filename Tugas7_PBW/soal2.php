<?php include 'menu.php'; ?>
<h2>Soal 2: Bilangan Genap</h2>
<form method="POST">
    Mulai dari angka: <input type="number" name="awal" required> <br>
    Sampai angka: <input type="number" name="akhir" required> <br><br>
    <input type="submit" name="hitung" value="Tampilkan">
</form>

<?php
if (isset($_POST['hitung'])) {
    $awal = $_POST['awal'];
    $akhir = $_POST['akhir'];

    for ($i = $awal; $i <= $akhir; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
}
?>