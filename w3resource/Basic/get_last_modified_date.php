<?php 
$the_file=basename($_SERVER['PHP_SELF']);
echo "Last time modified: ".date("l, d F Y, H:i:s",filemtime($the_file)); ?>