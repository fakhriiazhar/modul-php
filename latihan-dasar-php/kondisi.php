<?php

// belajar logika percabangan kondisi dalam pemrograman php:
// a == b
// a < b
// a > b
// a <= b
// a >= b
// a != b


$namaHeroML = "Argus";
$level = 6;

if($level < 4) {
  echo $namaHeroML." Belum memiliki ulti";
} else if($level >=4){
  echo $namaHeroML." Sudah memiliki ulti";
} else {
  echo $namaHeroML." Tidak ada dalam permainan";
}