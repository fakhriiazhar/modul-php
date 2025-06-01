<?php
$jumlahUang = 1575250;

// Hitung jumlah pecahan yang dibutuhkan
$a = floor($jumlahUang / 100000); // Pecahan 100.000
$jumlahUang = $jumlahUang % 100000;

$b = floor($jumlahUang / 50000); // Pecahan 50.000
$jumlahUang = $jumlahUang % 50000;

$c = floor($jumlahUang / 20000); // Pecahan 20.000
$jumlahUang = $jumlahUang % 20000;

$d = floor($jumlahUang / 5000); // Pecahan 5.000
$jumlahUang = $jumlahUang % 5000;

$e = floor($jumlahUang / 100); // Pecahan 100
$jumlahUang = $jumlahUang % 100;

$f = floor($jumlahUang / 50); // Pecahan 50
$jumlahUang = $jumlahUang % 50;

// Tampilkan hasil
echo "jumlah Rp.100.000: ".$a. "<br />";
echo "jumlah Rp.50.000: ".$b. "<br />";
echo "jumlah Rp.20.000: ".$c."<br />";
echo "jumlah Rp.5.000: ".$d."<br />";
echo "jumlah Rp.100: ".$e."<br />";
echo "jumlah Rp.50: ".$f."<br />";
?>
