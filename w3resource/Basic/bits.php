<?php 
function isbin($number){
	return preg_match("/\b[01]+\b/", $number);
}

function same_bin_value($number, $pos1, $pos2){
	if(isbin($number)){

		$digits=str_split($number);

		return $digits[$pos1]==$digits[$pos2];

	}else

		return false;
	
}

same_bin_value(20200,0,2) ? print "cierto": print "falso";
 ?>