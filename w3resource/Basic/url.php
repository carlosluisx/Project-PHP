<?php 
$url='https://www.w3resource.com/php-exercises/php-basic-exercises.php';
$parsed_url=parse_url($url);
echo "scheme: ".$parsed_url['scheme']."<br>";
echo "host: ".$parsed_url['host']."<br>";
echo "path: ".$parsed_url['path']; ?>