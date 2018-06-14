<?php 
//this module consists of an evaluation of PHP 5/7


if(version_compare(phpversion(), "5.3.0", "ge")){
	echo "greater than 5.3.0";
}
else echo "no";
 ?>
