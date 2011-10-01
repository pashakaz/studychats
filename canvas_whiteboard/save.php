<?php
//Must replace all spaces with plusses to avoid corrupt data
$dataurl = str_replace(" ", "+", $_POST["u"]);
$data = substr($dataurl, strpos($dataurl, ","));

$file = fopen("image.jpg",  "wb");
fwrite($file, base64_decode($data));
fclose($file);
?>