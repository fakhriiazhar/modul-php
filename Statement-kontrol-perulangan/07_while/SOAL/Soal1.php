<html>
<head>
    <title>Perhitungan Saldo Akhir</title>
</head>
<body>
    <h2>Perhitungan saldo</h2>
    <form action="" method="POST">
        <label for="saldo_awal">Saldo Awal (Rp):</label>
        <input type="number" id="saldo_awal" name="saldo_awal" required>
        <br><br>
        <label for="bulan">Jumlah Bulan:</label>
        <input type="number" id="bulan" name="bulan" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $saldo_awal = $_POST['saldo_awal'];
        $bulan = $_POST['bulan'];
        $saldo = $saldo_awal;
        $biaya_admin = 9000;    

        for ($i = 0; $i < $bulan; $i++) {
            if ($saldo < 1100000) {
                $bunga = 0.03; 
            } else {
                $bunga = 0.04; 
            }

            $saldo += $saldo * $bunga / 12;
            $saldo -= $biaya_admin;
        }

        echo "<h3>Saldo Akhir setelah $bulan bulan adalah: Rp " . number_format($saldo, 2, ',', '.') . "</h3>";
    }
    ?>
</body>
</html>
