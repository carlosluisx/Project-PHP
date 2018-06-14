<?php 
function bead_sort($array){
	rsort($array);
	return array_values($array);
}

$array=array(5,3,1,3,8,7,4,1,1,3);

print_r(bead_sort($array));
?>