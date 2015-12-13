<?php
$bIDs = $_POST['bIDs'];
$timestamp = $_POST['timestamp'];
$f = fopen("data.txt","a");
//$s = serialize($bIDs);
fwrite($f,"\n");
fwrite($f, $timestamp);
fwrite($f, "--");
fwrite($f,print_r($bIDs,true));
fclose($f);
?>