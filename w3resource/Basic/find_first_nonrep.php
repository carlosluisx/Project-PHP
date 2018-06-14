<?php 
function first_non_repeated($string){
	$chararray=str_split($string);	
	for($i=0;$i<strlen($string); $i++) {
		if(substr_count($string,$chararray[$i])==1){
			return $chararray[$i];
		}
	}
	return false;
}

echo "la letra que no se repite es \"".first_non_repeated("holaaoh")."\""; ?>