<h1>Cari Rata-rata Bilangan</h1>
<?php
    //membaca jumlah komponen dari hidden textbox
    $n = $_POST['n'];
    // membaca value dari masing-masing komponen textbox dan menjumlahkannya
    $jumlah = 0;
    for ($i = 0; $i <= $n - 1; $i++)
    {
        $bilangan[$i] = $_POST['data'.$i];
        $jumlah += $bilangan[$i];
    }
    // hitung rata-rata
    $rataRata = $jumlah/$n;
    echo "Rata-ratanya adalah : ".$rataRata;
?>