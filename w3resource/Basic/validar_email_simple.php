<?php 
$email="dezmacht@gmail.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
 	echo "el email ".$email." es válido";
 } ?>