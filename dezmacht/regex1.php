<?php 
$string="Hello, you!";
$string_mod=preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$string);
echo $string."<br>";
echo $string_mod; ?>
