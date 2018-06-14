<?php 
$file=basename($_SERVER['PHP_SELF']);
$lasttm=filemtime($file);
echo "last time modified: ".date("d/m/Y H:i:s",filemtime($file));

?>