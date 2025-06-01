<?php
    session_start(); // mengaktifkan SESSION
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    // menyimpan kedua bilangan ke dalam SESSION
    $_SESSION['bil1'] = $bil1;
    $_SESSION['bil2'] = $bil2;
    echo "Anda memasukkan bilangan ke-1 : ".$bil1."<br />";
    echo "Anda memasukkan bilangan ke-2 : ".$bil2."<br />";
    echo "<a href='lanjut.php'>Klik di sini</a>";
?>