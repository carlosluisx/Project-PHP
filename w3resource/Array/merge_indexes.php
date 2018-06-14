<?php 

/*Write a PHP program to merge (by index) the following two arrays. 
Sample arrays : 
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com"); 
Expected Output :

Array  
(      
[0] => Array          
(              
[0] => w3resource              
[1] => 77              
[2] => 87          
)        
[1] => Array          
(              
[0] => com              
[1] => 23              
[2] => 45          
)    
)*/

$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");

function merge_arrays_by_index($x,$y){
	$array=array();
	if(is_scalar($x)){
		$array[]=$x;
	}else{
		foreach($x as $value1){
		$array[]=$value1;
		}
	}	
	foreach($y as $value2){
		$array[]=$value2;
	}
	return $array;
}
print_r(array_map('merge_arrays_by_index',$array2, $array1));
?>
