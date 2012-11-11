<?php
$file = rand();
$contents = $_POST['contents'];
$encodedData = str_replace(' ','+',$contents);
$decodedData = base64_decode($encodedData);
$fp = fopen('copies/'.$file.'.png', 'w');
fwrite($fp, $decodedData);
fclose($fp);
?>