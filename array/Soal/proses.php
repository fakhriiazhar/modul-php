<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian</title>
</head>
<body>
    <h1>Hasil Pencarian Bilangan</h1>
    <?php
    // Data bilangan
    $data = [273, 281, 384, 119, 392, 184, 105, 129, 204, 219, 274, 275, 263];

    // Ambil bilangan dari input
    $number = isset($_POST['number']) ? intval($_POST['number']) : null;

    // Cek apakah bilangan ditemukan
    $position = array_search($number, $data);

    if ($position !== false) {
        echo "Bilangan yang Anda cari ada pada urutan ke-" . ($position + 1);
    } else {
        echo "Bilangan yang Anda cari tidak ditemukan dalam data.";
    }
    ?>
    <br><br>
    <a href="form.php">Kembali ke Formulir</a>
</body>
</html>
