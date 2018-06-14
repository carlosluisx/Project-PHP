<?php 
function full_current_url(){
	$full_url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	return $full_url;
}
echo full_current_url();

 ?>