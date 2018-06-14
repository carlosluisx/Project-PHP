<?php 
function trinary_op($var){
	$greater_message="$var is greater than";
	$lesser_message="$var is lesser than";
	
	$result=
	$var > 30 ? "$greater_message 30" :
	($var > 20 ? "$greater_message 20" :
	($var > 10 ? "$greater_message 10":
	"$lesser_message 10"));

	is_int($var)==false
	? $result="you have to input a valid integer"
	: $result;
	return $result;	
}	

function retrieve_form_text(){
	if(!empty($_GET['number'])){
		$text="Introduzca otro entero";
	}
	else $text="Introduzca un entero";


	return $text;
}

function retrieve_result_text(){
	if(!empty($_GET['number'])){
		$text=trinary_op($_GET['number']);
	}
	else $text=null;


	return $text;
}

?>
