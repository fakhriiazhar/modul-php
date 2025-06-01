<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modular Web Page</title>
    <style>
        body {
            font-family: <?php echo $font_family; ?>;
            font-size: <?php echo $font_size; ?>;
            background-color: <?php echo $background_color; ?>;
            color: <?php echo $text_color; ?>;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: navy;
            color: white;
            padding: 10px;
            text-align: center;
        }
        .nav {
            background-color: whitesmoke;
            padding: 10px;
        }
        .nav a {
            margin: 0 10px;
            text-decoration: none;
            color: navy;
        }
        .content {
            padding: 20px;
        }
        .footer {
            background-color: navy;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Fakhrii Azhar | 2311102441169</h1>
    </div>
    <div class="nav">
        <a href="index.php">Beranda</a>
        <a href="http://localhost/Pemrograman-web/Teknik-modularitas/08_modularitas/">Praktikum 11</a>
        <a href="http://localhost/Pemrograman-web/Statement-kontrol-perulangan/">Praktikum 10</a>
        <a href="http://localhost/Pemrograman-web/Statement-kontrol-kondisi/">Praktikum 9</a>
        <a href="http://localhost/Pemrograman-web/Post-and-get-request/">Praktikum 8</a>
        <a href="http://localhost/Pemrograman-web/02-assignment/">Praktikum 7</a>
    </div>
