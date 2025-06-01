<?php
    include "header.php";
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $hasil = $bil1 + $bil2;
?>
<h1><font face="<?php echo $jenisFontHeading; ?>">
        Output
    </font></h1>
<p> <font face="<?php echo $jenisFontParagraf; ?>">
        Hasil penjumlahannya adalah <?php echo $hasil; ?>
    </font></p>
<?php
    include "footer.php";
?>