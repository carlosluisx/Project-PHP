<?php 
//An Armstrong number of three digits is an integer so that the sum of the cubes of its digits is equal to the number itself. For example, 153 is an Armstrong number since 1**3 + 5**3 + 3**3 = 153

/*function has_three_digits($number){
	return preg_match("/[0-9]{3}/",$number);
}*/

function get_each_char_cube($number){
	if(is_int($number)){

		$chars=str_split($number);
		$char_cubes=array();

		foreach ($chars as $char) {
			$char_cubes[]=pow($char,count($chars));
		}
		return $char_cubes;
	}

	else return false;	
}

function is_armstrong($number){
	if(is_int($number)){
		if (($number==array_sum(get_each_char_cube($number))))
		{
		return true;
		}
	}	
	else return false;
}


is_armstrong(548834) ? print "548834 is an Armstrong number" : print "548834 is not an Armstrong number";

 ?>