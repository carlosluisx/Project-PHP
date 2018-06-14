<?php 
require "connect_employees_db.php";
$query=@mysqli_query($connect, "SELECT * FROM employees");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tabla informativa</title>
</head>
<body>
	<table border="1px solid black" style="border-collapse: collapse">
		<?php while($row=mysqli_fetch_row($query)): ?>
			<tr>
				<td style="color:blue"><?php echo $row[0]; ?></td
				><td><?php echo $row[1]; ?></td>
			</tr>			
		<?php endwhile; ?>
	</table>
</body>
</html>