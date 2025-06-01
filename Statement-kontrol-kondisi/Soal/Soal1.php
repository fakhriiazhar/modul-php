<html>
<head>
<title>Cek Tahun Kabisat</title>
</head>
<body>
    <h2>Cek Apakah Tahun Kabisat</h2>
    <form method="post" action="">
        <label for="year">Masukkan Tahun:</label>
        <input type="number" name="year" id="year" required>
        <button type="submit">Cek</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tahun = intval($_POST['year']);
        if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
            echo "<p>Tahun $tahun adalah tahun kabisat.</p>";
        } else {
            echo "<p>Tahun $tahun bukan tahun kabisat.</p>";
        }
    }
    ?>
</body>
</html>
