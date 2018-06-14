<?php 

$file="getlastmod.php";
$filemtime=date("H:i:s", filemtime($file));

echo $filemtime."<br>";
echo date("H:i:s", getlastmod());
?>
