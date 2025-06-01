<html>
<head>
<title>Hitung Gaji Berdasarkan Golongan</title>
</head>
<body>
    <h2>Form Perhitungan Gaji Karyawan Berdasarkan Golongan</h2>
    <form method="post" action="">
        <label for="jamKerja">Masukkan Jumlah Jam Kerja dalam Seminggu:</label>
        <input type="number" name="jamKerja" id="jamKerja" required><br><br>

        <label for="golongan">Pilih Golongan:</label>
        <select name="golongan" id="golongan" required>
            <option value="">--Pilih Golongan--</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
        </select><br><br>

        <button type="submit">Hitung Gaji</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jamKerja = intval($_POST['jamKerja']);
        $golongan = $_POST['golongan'];
        $upahPerJam = 0;
        $upahLemburPerJam = 3000;
        $batasJamNormal = 48;
        $totalGaji = 0;

        // Menentukan upah per jam berdasarkan golongan
        switch ($golongan) {
            case "A":
                $upahPerJam = 4000;
                break;
            case "B":
                $upahPerJam = 5000;
                break;
            case "C":
                $upahPerJam = 6000;
                break;
            case "D":
                $upahPerJam = 7500;
                break;
            default:
                echo "<p>Golongan tidak valid.</p>";
                exit;
        }

        // Menghitung total gaji
        if ($jamKerja > $batasJamNormal) {
            $jamLembur = $jamKerja - $batasJamNormal;
            $totalGaji = ($batasJamNormal * $upahPerJam) + ($jamLembur * $upahLemburPerJam);
        } else {
            $totalGaji = $jamKerja * $upahPerJam;
        }

        echo "<p>Jumlah jam kerja: $jamKerja jam</p>";
        echo "<p>Golongan: $golongan</p>";
        echo "<p>Total Gaji yang Diterima: Rp. " . number_format($totalGaji, 0, ',', '.') . "</p>";
    }
    ?>
</body>
</html>
