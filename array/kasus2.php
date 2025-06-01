<?php
    $bil = array(9, 2, 10, 3, 7, 5, 2);
    $max = $bil[0];
    for ($i = 0; $i <= count($bil)-1; $i++)
    {
        if ($bil[$i] > $max) $max = $bil[$i];
    }
    echo "Bilangan terbesarnya adalah: ".$max;
?>