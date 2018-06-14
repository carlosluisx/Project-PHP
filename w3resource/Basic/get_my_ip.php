<?php 
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
 	$client_ip=$_SERVER['HTTP_CLIENT_IP'];
 }
 elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
  	$client_ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  else{
  	$client_ip=$_SERVER['REMOTE_ADDR'];
  }
  echo $client_ip;
   ?>