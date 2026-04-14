<?php include 'menu.php'; ?>
<h2>Soal 3: Daftar Hewan</h2>
<form method="POST">
    Hewan 1: <input type="text" name="h[]" placeholder="" required><br>
    Hewan 2: <input type="text" name="h[]" placeholder="" required><br>
    Hewan 3: <input type="text" name="h[]" placeholder="" required><br>
    Hewan 4: <input type="text" name="h[]" placeholder="" required><br>
    Hewan 5: <input type="text" name="h[]" placeholder="" required><br><br>
    <input type="submit" name="tampil" value="Tampilkan Daftar">
</form>

<?php
if (isset($_POST['tampil'])) {
    $daftar_hewan = $_POST['h'];
    echo "<h3>Daftar Hewan Anda:</h3><ul>";
    foreach ($daftar_hewan as $hewan) {
        echo "<li>" . htmlspecialchars($hewan) . "</li>";
    }
    echo "</ul>";
}
?>