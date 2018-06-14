<?php 
/*
Write a PHP script which decodes the following JSON string. Go to the editor
Sample JSON code :
{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}
Expected Output :
Title : The Cuckoos Calling
Author : Robert Galbraith
Publisher : Little Brown
*/ 

function echo_key_colon_value($key,$value){
	echo $key." : ".$value."<br>";
}
$json='{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}';

$jsonarray=json_decode($json,true);

array_walk_recursive($jsonarray, "echo_key_colon_value");

?>