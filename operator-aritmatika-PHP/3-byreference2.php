<?php
$a = 20;
$b = &$a;

echo "\$a = $a, \$b = $b";
echo "<br />";
// Hasil proses: $a = 20, $b = 20

$a = $a + 5;
echo "\$a = $a, \$b = $b";
echo "<br />";
// Hasil proses: $a = 25, $b = 25

$b = $b + 10;
echo "\$a = $a, \$b = $b";
// Hasil proses: $a = 35, $b = 35
?>

