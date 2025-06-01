<html>
<head>
    <title>Solusi Persamaan x + y + z = 25</title>
</head>
<body>
    <h2>Solusi Persamaan x + y + z = 25</h2>
    
    <?php
    $jumlah_penyelesaian = 0;
    for ($x = 1; $x <= 23; $x++) {
        for ($y = 1; $y <= 24 - $x; $y++) {
            $z = 25 - $x - $y;
            if ($z > 0) {
                echo "x = $x, y = $y, z = $z<br>";
                $jumlah_penyelesaian++;
            }
        }
    }

    echo "<h3>Jumlah penyelesaian: $jumlah_penyelesaian</h3>";
    ?>
</body>
</html>
