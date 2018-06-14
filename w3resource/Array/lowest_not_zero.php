<?php 

function lowest_not_zero($array){
	return min(array_diff(array_map('intval', $array), array(0)));
}

echo "the lowest value is ".lowest_not_zero(array(12,34,123,0,-12,-123)); ?>