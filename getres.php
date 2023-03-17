<?php

$buf ='';
$myfile = fopen("source.php", "r");
if (filesize("source.php")>0)
{
$buf=fread($myfile,filesize("source.php"));
}
fclose($myfile);

echo $buf;

?>
