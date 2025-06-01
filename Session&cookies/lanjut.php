<?php
    session_start();
    // membaca nilai dari variabel SESSION
    $bil1 = $_SESSION['bil1'];
    $bil2 = $_SESSION['bil2'];
    echo "Anda memasukkan bilangan ke-1 : ".$bil1."<br />";
    echo "Anda memasukkan bilangan ke-2 : ".$bil2."<br />";
?>