<?php 
//swap two variables
$a=1;
$b=2;

$c=$a;

$a=$b;
$b=$c;

echo "a:".$a.", b:".$b."<br>";

list($a,$b)=array($b,$a);
echo " now a:".$a.", b:".$b."<br>";
 ?>