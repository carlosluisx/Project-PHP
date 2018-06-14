<?php 
$the_file=basename($_SERVER['PHP_SELF']);

$last_modified=filemtime($the_file);

function lastmtime($file){
	global $last_modified;
	return date("d/m/Y H:i:s",$last_modified);
}

echo lastmtime($the_file); ?>