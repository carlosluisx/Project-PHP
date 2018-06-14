<?php 

/*Write a PHP script to sort the following associative array : 
array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in 
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key*/

$array=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

//ascending order by value
asort($array);
print_r($array);
echo "<br>";
//descending order by value
arsort($array);
print_r($array);
echo "<br>";
//ascending order by key
ksort($array);
print_r($array);
echo "<br>";
//descending order by key
krsort($array);
print_r($array);
echo "<br>";?>