<?php 
function cartesian_product($list1,$list2){
	$list1=explode(" ", $list1);
	$list2=explode(" ", $list2);
	$list3=array();
	foreach ($list1 as $key => $value) {
		$list3[]=$list1[$key]*$list2[$key];
	}
	return implode(" ", $list3);
}

function retrieve_result(){
	if ((isset($_GET["list1"]))&&(isset($_GET["list2"]))) {
		return cartesian_product($_GET["list1"], $_GET["list2"]);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Producto cartesiano</title>
</head>
<body>

	<form action="" method="GET">
		<h1>Enter two valid sets separated by spaces</h1>
		<h3>List 1:</h3><input type="text" name="list1">
		<h3>List 2:</h3><input type="text" name="list2">
		<input type="submit" name="">		
	</form>
	<h2><?php echo retrieve_result(); ?></h2>
	
</body>
</html>