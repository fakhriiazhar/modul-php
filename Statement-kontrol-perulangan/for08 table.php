<?php
$jumlahBaris = 10;
$jumlahKolom = 6;
echo "<table border='1'>";
for ($baris = 1; $baris <= $jumlahBaris; $baris++)
{
    echo "<tr>";
    for ($kolom = 1; $kolom <= $jumlahKolom ; $kolom++)
    {
        echo "<td>...</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>