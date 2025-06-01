<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_pengunjung = $_POST['nama'];
    $tanggal_kunjungan = date("d/m/Y H:i:s");

    setcookie("nama_pengunjung", $nama_pengunjung, time() + (86400)); 
    setcookie("tanggal_kunjungan", $tanggal_kunjungan, time() + (86400));

    header("Location: index.php");
    exit();
}

// Fungsi untuk keluar dan menghapus cookie
if (isset($_GET['exit'])) {
    setcookie("nama_pengunjung", "", time() - 3600); 
    setcookie("tanggal_kunjungan", "", time() - 3600); 
    header("Location: index.php");
    exit();
}

$nama_pengunjung = $_COOKIE['nama_pengunjung'] ?? null;
$tanggal_kunjungan = $_COOKIE['tanggal_kunjungan'] ?? null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"] {
            padding: 10px;
            width: calc(100% - 22px);
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            background: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        .exit-btn {
            margin-top: 10px;
            padding: 10px 20px;
            background: #dc3545;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .exit-btn:hover {
            background: #a71d2a;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if ($nama_pengunjung && $tanggal_kunjungan): ?>
            <h1>Terima kasih, <?= htmlspecialchars($nama_pengunjung); ?>!</h1>
            <p>Anda terakhir mengunjungi halaman ini pada <?= htmlspecialchars($tanggal_kunjungan); ?>.</p>
            <a href="?exit=true">
                <button class="exit-btn">Keluar</button>
            </a>
        <?php else: ?>
            <h1>Selamat datang!</h1>
            <p>Silakan masukkan nama Anda:</p>
            <form method="POST">
                <input type="text" name="nama" placeholder="Masukkan nama Anda" required>
                <button type="submit">Submit</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
