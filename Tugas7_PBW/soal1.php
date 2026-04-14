<?php include 'menu.php'; ?>
<h2>Soal 1: Cek Jenis Kendaraan</h2>
<form method="POST">
    Masukkan Jumlah Roda: <input type="number" name="roda" required>
    <input type="submit" value="Cek">
</form>

<?php
if (isset($_POST['roda'])) {
    $roda = $_POST['roda'];
    echo "Jumlah Roda: $roda <br> Keterangan: ";

    switch ($roda) {
        case 2:
            echo "Sepeda atau Motor";
            break;
        case 3:
            echo "Bajaj atau Becak";
            break;
        case 4:
            echo "Mobil";
            break;
        case 6:
            echo "Bus atau Truk";
            break;
        case 8:
        case 10:
            echo "Kemungkinan Besar Truk Kontainer";
            break;
        default:
            echo "Kendaraan tidak dikenal";
            break;
    }
}
?>