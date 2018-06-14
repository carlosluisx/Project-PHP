<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 
	$string="My name is Daniel, Daniel is my name"; 

	preg_match_all("/D+/", $string, $array);

	print_r($array);
	?>
</body>
</html>