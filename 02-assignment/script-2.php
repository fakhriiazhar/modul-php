<html>
    <head>
        <title>Menghitung gaji bersih karyawan</title>
    </head>
    <body>
        <h1>Menghitung Gaji bersih karyawan</h1>
        <?php
        /*script ini akan menghitung gaji bersih karyawan yang dirumuskan dengan
        Gaji Bersih = Gaji Pokok + tunjangan - pajak;
        Misalkan gaji pokoknya Rp. 1.000.000, tunjangan Rp. 500.000 dan 
        pajaknya 15% dari (gaji kotor = gaji pokok + tunjangan)
        Berikut ini ada beberapa cara pembuatan script yang akan mengaghasilkan output yang sama
        */
        // Cara ke - 1
        $gajiPokok = 1000000; // gaji pokok
        $tunjangan = 500000; // tunjangan
        $gajiKotor = $gajiPokok + $tunjangan; // hitung gaji kotor
        $pajak = $gajiKotor * 0.15; // hitung pajak
        $gajiBersih = $gajiPokok + $tunjangan - $pajak; // hitung gaji bersih
        echo "<p>Gaji bersih karyawan adalah Rp. ".$gajiBersih."</p>"; // menampilkan gaji bersih
        // Cara ke - 2
        $gajiPokok = 1000000; // gaji pokok
        $tunjangan = 500000; // tunjangan
        $gajiKotor = $gajiPokok + $tunjangan; // hitung gaji kotor
        $gajiBersih = $gajiKotor - (0.15 * $gajiKotor); // hitung gaji bersih
        echo "<p>Gaji bersih karyawan adalah Rp. ".$gajiBersih."</p>"; // menampilkan gaji bersih
        // Cara ke - 3
        $gajiPokok = 1000000; // gaji pokok
        $tunjangan = 500000; // tunjangan
        $gajiBersih = $gajiPokok + $tunjangan - 0.15 * ($gajiPokok + $tunjangan); // hitung gaji bersih
        echo "<p>Gaji bersih karyawan adalah Rp. ".$gajiBersih."</p>"; // menampilkan gaji bersih
        ?>
    </body>
</html>