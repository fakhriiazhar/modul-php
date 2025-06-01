<?php
    $bil = array(9, 2, 10, 3, 7, 5, 2);
    $jumlah = 0;
    for ($i = 0; $i <= count($bil)-1; $i++)
    {
        $jumlah = $jumlah + $bil[$i]; // atau bisa dituliskan $jumlah += $bil[$i];
    }
    $rataRata = $jumlah/count(($bil));
    echo "Rata-ratanya adalah : ".$rataRata;
?>