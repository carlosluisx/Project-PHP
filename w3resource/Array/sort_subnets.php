<?php 
//Write a PHP function to sort subnets.

function compare_subnets($subnet1,$subnet2){
    //1. Convert from string to array
    //2. make comparison based on first member of array
    //3. make comparison based on second member of array
    //4. make comparison based on third member of array
    $subnet1_array=explode(".", $subnet1);
    $subnet2_array=explode(".", $subnet2);

    foreach(range(0,3) as $i){
        if ($subnet1_array[$i] > $subnet2_array[$i]){
            return 1;
        }
        else if ($subnet1_array[$i] < $subnet2_array[$i]){
            return -1;
        }          
    }
    return -1;
}

$subnet_list = 
array('192.169.12',
'192.167.11',
'192.169.14',
'192.168.13',
'192.167.12',
'122.169.15',
'192.167.16'
);

usort($subnet_list, 'compare_subnets');

print_r($subnet_list);

?>