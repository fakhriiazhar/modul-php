<?php
    $x = array(10, 12, 3, 44, 50, "hallo");
    echo "$x[0] <br />"; // menampilkan value pada ruang ke-0, yaitu 10
    echo "$x[5] <br />"; // menampilkan value pada ruang ke-5, yaitu 'hallo'
    $x[2] = -3; // mengganti value pada ruang ke-2 dengan value yang baru (-3)
    echo "$x[2] <br />"; // menghasilkan -3 (yang tampil bukan 3 karena sudah ditimpa -3)
?>