<?php
$url='https://www.youtube.com/watch?v=9g5EIfEm4Lg';
$parseurl=parse_url($url, PHP_URL_QUERY);

parse_str($parseurl);

echo "v = ".$v.'<br>ob = '.$ob;
?>
