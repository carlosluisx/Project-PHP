<?php 
include "connect.php";

$csv='files/4to.csv';
$table='201720184U';

mysqli_query($connect,"DROP TABLE IF EXISTS $table");
mysqli_query($connect,"CREATE TABLE $table(
	id INT(11) AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(150) NOT NULL)")
	or die(mysqli_error($connect));

$file=file($csv);
$array=array();
foreach($file as $key => $line){	
	$array[$key]=explode(",",$line);
	$thisone=$array[$key];
	mysqli_query($connect, 
		"INSERT INTO $table	VALUES
		 (".$thisone[0].", '".$thisone[1]."')")
		 or die(mysqli_error($connect));
}
echo "success"; 
?>