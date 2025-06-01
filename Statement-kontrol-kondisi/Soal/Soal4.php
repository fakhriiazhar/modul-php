<?php
$bulan = date("n"); 
$tahun = date("Y");

$jumlahHari = 0;

switch ($bulan) {
    case 1: // Januari
    case 3: // Maret
    case 5: // Mei
    case 7: // Juli
    case 8: // Agustus
    case 10: // Oktober
    case 12: // Desember
        $jumlahHari = 31;
        break;
    case 4: // April
    case 6: // Juni
    case 9: // September
    case 11: // November
    case 12: // Desember
        $jumlahHari = 30;
        break;
    case 2: // Februari
        break;
    default:
        echo "Bulan tidak valid.";
        exit;
}

echo "Bulan saat ini adalah " . date("F") . " dan memiliki $jumlahHari hari.";
?>
