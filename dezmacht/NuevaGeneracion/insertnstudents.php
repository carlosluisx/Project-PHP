<?php 
include "connect.php";
	if (isset($_GET['sure'])) {
		mysqli_query($connect,"DELETE FROM calificaciones_4u2l")or die(mysqli_error($connect));
		mysqli_query($connect,"ALTER TABLE calificaciones_4u2l AUTO_INCREMENT = 1")or die(mysqli_error($connect));

	foreach (range(1,36) as $value) {
	 	mysqli_query($connect, "
	 		INSERT INTO calificaciones_4u2l
	 		VALUES 
	 		(NULL, $value, 0, 0, 0, 0, 0, 0)")OR die(mysqli_error($connect));
	 }
	 echo "success";
	}
	else echo "You are not sure. please set ?sure=1 on URI to restructure your table";

  ?>