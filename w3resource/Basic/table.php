<?php 
$table_info=array(
array("Salary of Mr. A is", "1000$"),
array("Salary of Mr. B is", "1200$"),
array("Salary of Mr. C is", "1400$")
);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Table info</title>
</head>
<body>
<table border="1px solid black" style="border-collapse: collapse">
<?php for($i=0;$i<3;$i++): ?>
	<tr>
		<td style="color:blue">
			<?php echo $table_info[$i][0]; ?>
		</td>
		<td>
			<?php echo $table_info[$i][1]; ?>
		</td>
	</tr>
<?php endfor; ?>	
</table>
</body>
</html>