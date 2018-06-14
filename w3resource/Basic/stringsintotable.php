<?php 
$elements=array(
array("Salary of Mr. A is","1000$"),
array("Salary of Mr. B is","1200$"),
array("Salary of Mr. C is","1400$")
); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Table of content</title>
</head>
<body>
	<h1>Employees</h1>
<table border="1px solid black" style="border-collapse: collapse;">
	
<?php foreach($elements as $text): ?>
	<tr>
		<?php foreach($text as $sub): ?>
			<td>
				<?php echo $sub ?>
			</td>
		<?php endforeach; ?>
	</tr>
<?php endforeach; ?>

</table>
</body>
</html>