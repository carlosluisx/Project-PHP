<?php 
function remove_duplicates($list){
	if (!is_array($list)) {
		$list=str_split($list);
	}
	$reviewed=array();
	foreach($list as $position => $char){
		if(in_array($char, $reviewed)){			
			unset($list[$position]);
		}
		$reviewed[]=$char;		
	}
	return $list;
}
$test_array=array(1,2,3,2,1,2);
print_r(array_unique($test_array));
?>