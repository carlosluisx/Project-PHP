<?php 
function echo_key_colon_value($key,$value){
	echo $key." : ".$value."<br>";
}
$numeros=array(1, 2, 3, 4, 5, 6);
array_splice($numeros, 3, 0, "$");
array_walk_recursive($numeros, "echo_key_colon_value"); ?> 