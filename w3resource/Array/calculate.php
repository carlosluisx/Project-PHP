<?php 
/*Write a PHP script to calculate and display average temperature, five lowest and highest temperatures. Go to the editor
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Expected Output :
Average Temperature is : 70.6 
List of seven lowest temperatures : 60, 62, 63, 63, 64, 
List of seven highest temperatures : 76, 78, 79, 81, 85,*/
$temperatures=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

function get_average($array){
	return array_sum($array)/count($array);
}
function n_sorted_values($array,$sorting, $n){
	($sorting==0) ? rsort($array) : sort($array);
	$values=array();
	foreach($array as $key => $value){
		$values[]=$value;
		if ($key==($n-1)) {
			break;
		}
	}
	return $values;
}
function to_csv($array){
	return implode(", ", $array);
}
echo "Average Temperature is : ".get_average($temperatures)."<br>";
echo "List of seven lowest temperatures : ".to_csv(n_sorted_values($temperatures,1, 7))."<br>";
echo "List of seven highest temperatures : ".to_csv(n_sorted_values($temperatures,0, 7))."<br>";

 ?>
