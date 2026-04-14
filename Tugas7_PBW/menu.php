<?php
session_start();
?>
<a href="index.php">Input Identitas</a> | 
<a href="soal1.php">Soal 1 (Switch)</a> | 
<a href="soal2.php">Soal 2 (For)</a> | 
<a href="soal3.php">Soal 3 (Foreach)</a> | 
<a href="soal4.php">Soal 4 (Ternary)</a>
<hr>

<?php
if (isset($_SESSION['nama'])) {
    echo "Nama: " . $_SESSION['nama'] . " | NPM: " . $_SESSION['npm'] . " | Kelas: " . $_SESSION['kelas'];
    echo "<hr>";
}
?>