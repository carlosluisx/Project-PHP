<?php 
// 6. Write a simple PHP browser detection script.
echo $_SERVER['HTTP_USER_AGENT']."<br>";

//8. Write a PHP script, which will return the following components of the url 'https://www.w3resource.com/php-exercises/php-basic-exercises.php'.

$url="https://www.w3resource.com/php-exercises/php-basic-exercises.php";
$to_url=parse_url($url);
echo $to_url['scheme']."://".$to_url['host'].$to_url['path']."<br>";
//9. Write a PHP script, which changes the color of the first character of a word.

$string="Hola amigo";
$hola=preg_replace("/(\b[A-Z])/i", ' <span style="color: green">\1</span>', $string);
echo $hola;

//22. Write a PHP script to get the full URL.

$full_url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo $full_url."<br>";

//23. Write a PHP script to compare the PHP version.

version_compare("5.0.0",phpversion(), "<") ?
	print phpversion()." is greater than 5.0.0":
	print phpversion()." is less than or equal to 5.0.0";

 ?>


