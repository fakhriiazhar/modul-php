<?php
if (isset($_POST['jumlah_uang'])) {
    $jumlah_uang = $_POST['jumlah_uang'];

    $pecahan = [100000, 50000, 20000, 5000, 100, 50];
    $hasil = [];

    foreach ($pecahan as $uang) {
        $banyaknya = intdiv($jumlah_uang, $uang);  
        $hasil[$uang] = $banyaknya;
        $jumlah_uang %= $uang;
    }

    echo "<h1>Hasil Pecahan</h1>";
    foreach ($hasil as $uang => $banyaknya) {
        echo "<p>Pecahan Rp " . number_format($uang, 0, ',', '.') . " sebanyak: " . $banyaknya . " lembar</p>";
    }
} else {
    echo "Silakan masukkan jumlah uang yang ingin diambil.";
}
?>
