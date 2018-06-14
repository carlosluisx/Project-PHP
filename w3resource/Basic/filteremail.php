<?php 
$mail="dezmacht@gmail.com";
if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
 	echo "mail is valid (".$mail.")";
 }else echo "u stupid"; ?>