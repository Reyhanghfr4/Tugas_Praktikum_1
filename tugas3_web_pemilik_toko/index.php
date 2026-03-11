<?php
// 1. Pajak dijadikan konstanta (10%)
define("PAJAK", 0.10);

// 2. Informasi harga barang disimpan dalam array
// Contoh: [Pensil, Buku, Penghapus]
$harga_barang = [5000, 15000, 2000];

// 3. Jumlah yang dibeli (dibuat variable)
$jumlah_beli = [2, 1, 5]; // Membeli 2 pensil, 1 buku, dan 5 penghapus

// 4. Menghitung total harga menggunakan operator aritmatika
$total_sebelum_pajak = 0;

// Menghitung subtotal per item
for ($i = 0; $i < count($harga_barang); $i++) {
    $total_sebelum_pajak += ($harga_barang[$i] * $jumlah_beli[$i]);
}

$nominal_pajak = $total_sebelum_pajak * PAJAK;
$total_akhir = $total_sebelum_pajak + $nominal_pajak;

// Menampilkan hasil
echo "<h2>Struk Pembayaran Toko</h2>";
echo "Total Harga (Sebelum Pajak): Rp " . number_format($total_sebelum_pajak, 0, ',', '.') . "<br>";
echo "Pajak (" . (PAJAK * 100) . "%): Rp " . number_format($nominal_pajak, 0, ',', '.') . "<br>";
echo "--------------------------------------- <br>";
echo "<strong>Total Harga Akhir: Rp " . number_format($total_akhir, 0, ',', '.') . "</strong>";
?>