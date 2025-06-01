<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $saldo_awal = $_POST['saldo_awal'];
    $bunga = $_POST['bunga'];
    $lama_bulan = $_POST['lama_bulan'];
    
    if (is_numeric($saldo_awal) && is_numeric($bunga) && is_numeric($lama_bulan)) {
        // Konversi bunga ke bentuk desimal
        $bunga_perbulan = $bunga / 100;

        $saldo_akhir = $saldo_awal;
        for ($i = 1; $i <= $lama_bulan; $i++) {
            $saldo_akhir += $saldo_akhir * $bunga_perbulan;
        }

        echo "<p>Saldo awal: Rp. " . number_format($saldo_awal, 2, ',', '.') . "</p>";
        echo "<p>Bunga per bulan: " . $bunga . "%</p>";
        echo "<p>Lama tabungan: " . $lama_bulan . " bulan</p>";
        echo "<p><strong>Saldo akhir setelah " . $lama_bulan . " bulan: Rp. " . number_format($saldo_akhir, 2, ',', '.') . "</strong></p>";
    } else {
        echo "<p>Input tidak valid. Pastikan semua nilai yang dimasukkan adalah angka.</p>";
    }
} else {
    echo "<p>Metode pengiriman tidak valid.</p>";
}
?>
