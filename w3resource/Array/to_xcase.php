<?php 

/*function to_x_case($array=array(),$case){	
	if($case==UPPER){		
		foreach ($array as $key => $value) {
		$array[$key]=strtoupper($array[$key]);
		}
	}
	elseif($case==LOWER){
		foreach ($array as $key => $value) {
		$array[$key]=strtolower($array[$key]);
		}
	}
	
	return $array;
}*/

$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

print_r(array_map('strtolower',$Color));
print_r(array_map('strtoupper',$Color)); ?>