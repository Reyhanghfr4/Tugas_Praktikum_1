<?php include 'menu.php'; ?>
<h2>Form Identitas</h2>
<form method="POST">
    Nama: <input type="text" name="nama" required><br>
    NPM: <input type="text" name="npm" required><br>
    Kelas: <input type="text" name="kelas" required><br><br>
    <input type="submit" name="simpan" value="Simpan Identitas">
</form>

<?php
if (isset($_POST['simpan'])) {
    $_SESSION['nama'] = $_POST['nama'];
    $_SESSION['npm'] = $_POST['npm'];
    $_SESSION['kelas'] = $_POST['kelas'];
    echo "Data berhasil disimpan!";
}
?>