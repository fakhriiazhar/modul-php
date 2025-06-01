<?php
    include "header.php";
?>
<h1><font face="<?php echo $jenisFontHeading; ?>">
        input Bilangan
    </font></h1>
<p><font face="<?php echo $jenisFontParagraf; ?>">
        Masukkan dua buah bilangan pada form berikut ini
    </font></p>
<form method="post" action="proses.php">
    Bilangan 1 <input type="text" name="bil1" /><br />
    Bilangan 2 <input type="text" name="bil2" /><br />
    <input type="submit" name="submit" value="jumlahkan" />
</form>
<?php
    include "footer.php";
?>