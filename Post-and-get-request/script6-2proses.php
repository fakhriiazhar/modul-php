<html>
<head>
    <title>Menghitung Komisi Salesman</title>
</head>
<body>
    <h1>Menghitung Komisi Salesman</h1>
    <?php
    $nilaiJual = $_POST['penjualan'];
    $prosenKomisi = $_POST['komisi'];

    $komisi = $nilaiJual * $prosenKomisi / 100;
    
    echo "<p>nilai penjualan salesman : Rp. ".$nilaiJual. "</p>";
    echo "<p>prosentase Komisi : ".$prosenKomisi. " %</p>";
    echo "<p>komisi yang didapat salesman adalah Rp. ".$komisi. "</p>";
    ?>
    
</body>
</html>