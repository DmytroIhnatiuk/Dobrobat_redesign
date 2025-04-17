<?php 
$string =  $_POST['string'];
$key = "ff9fb76b80cd5243bd398b526d580a69455be124";
$hash = hash_hmac("md5",$string,$key);
echo $hash
?>
