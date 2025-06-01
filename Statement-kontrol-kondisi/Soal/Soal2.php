<html>
<head>
<title>Hitung Gaji Karyawan Honorer</title>
</head>
<body>
    <h2>Form Perhitungan Gaji Karyawan Honorer</h2>
    <form method="post" action="">
        <label for="jamKerja">Masukkan Jumlah Jam Kerja dalam Seminggu:</label>
        <input type="number" name="jamKerja" id="jamKerja" required>
        <button type="submit">Hitung Gaji</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jamKerja = intval($_POST['jamKerja']);
        $upahPerJam = 2000;
        $upahLemburPerJam = 3000;
        $batasJamNormal = 48;
        $totalGaji = 0;

        if ($jamKerja > $batasJamNormal) {
            $jamLembur = $jamKerja - $batasJamNormal;
            $totalGaji = ($batasJamNormal * $upahPerJam) + ($jamLembur * $upahLemburPerJam);
        } else {
            $totalGaji = $jamKerja * $upahPerJam;
        }

        echo "<p>Jumlah jam kerja: $jamKerja jam</p>";
        echo "<p>Total Gaji yang Diterima: Rp. " . number_format($totalGaji, 0, ',', '.') . "</p>";
    }
    ?>
</body>
</html>
