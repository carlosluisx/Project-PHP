<?php 
$code=file("https://stackoverflow.com/questions/2630013/invalid-argument-supplied-for-foreach");

foreach ($code as $key => $value) {
 	echo $key." ".htmlspecialchars($value)."<br>";
 } ?>