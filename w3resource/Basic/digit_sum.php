<?php 
function digit_sum($number){
	$number=str_split($number);
	return array_sum($number);
}


echo "the sum of the digits of 56 is ".digit_sum(56); ?>