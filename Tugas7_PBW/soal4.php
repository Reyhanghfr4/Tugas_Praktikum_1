<?php include 'menu.php'; ?>
<h2>Soal 4: Cek Genap/Ganjil</h2>
<form method="POST">
    Masukkan Angka: <input type="number" name="angka" required>
    <input type="submit" value="Cek">
</form>

<?php
if (isset($_POST['angka'])) {
    $angka = $_POST['angka'];
    $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";
    echo "Angka $angka adalah bilangan $hasil";
}
?>