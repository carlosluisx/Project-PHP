<?php 
/*Write a PHP script to get the shortest/longest string length from an array. Go to the editor
Sample arrays : ("abcd","abc","de","hjjj","g","wer")
Expected Output : The shortest array length is 1. The longest array length is 4.*/
$strings=array("abcd","abc","de","hjjj","g","wer");

function evaluate_array($array){	
	foreach ($array as $value) {
		$length=strlen($value);		
		if((empty($shortest))||(($length<$shortest))){
			$shortest=$length;
		}
		elseif((empty($longest))||(($length>$longest)))  {
			$longest=$length; 
		}
	}
	return "The shortest array length is $shortest. The longest array length is $longest.";
}

echo evaluate_array($strings);
 ?>
