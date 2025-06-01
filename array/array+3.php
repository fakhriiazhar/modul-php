<?php
    $x = array(10, 12, 3, 44, 50, "hallo");
    $x[] = 100;
    for ($i = 0; $i <= count($x)-1; $i++)
    {
        echo "Nilai kamar ke ".$i. " dari array = ".$x[$i]. "<br />";
    }
?>