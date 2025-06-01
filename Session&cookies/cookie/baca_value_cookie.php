<?php
IF (isset($_COOKIE['mycookie'])) {
    echo $_COOKIE['mycookie'];
}
else
    echo "Cookie Tidak Ada";
?>