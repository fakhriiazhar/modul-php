<html>
    <head>
        <title>Menghitung Komisi Salesman</title>
    </head>
    <body>
        <h1>Menghitung Komisi Salesman</h1>
        <?php
        /*
        Script ini akan menghitung komisi salesman berdasarkan nilai penjualan
        yang di capainya yaitu sebesar Rp. 1.500.000,-
        Ketentuan komisinya adalah sebesar 5% dari nilai penjualan yang dicapai.
        */
        $nilaiJual = 1500000; // nilai penjualan yang di dapat salesman
        $komisi = 0.05 * $nilaiJual; // menghitung komisi yaitu 5% dari nilai penjualan
        echo "<p>Nilai penjualan salesman : Rp. ".$nilaiJual."</p>"; // menampilkan nilai penjualan salesman
        echo "<p>Komisi yang didapat salesman adalah Rp. ".$komisi."</p>";
        // menampilkan hasi perhitungan komisi
        ?>
    </body>
</html>