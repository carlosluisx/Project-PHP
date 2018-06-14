<?php 
include "connect.php";
$section="2B";
$query=mysqli_query($connect,"SELECT nombre FROM 20172018".$section);
$students=array();
while($row=mysqli_fetch_row($query)){
	$students[]=$row[0];
}

if (in_array(NULL, $_GET)) {
	$nullm="There are null values, please try again";
}
else{
	foreach ($_GET as $key => $value) {
		mysqli_query($connect, "UPDATE 20172018".$section."SET alias='$value' WHERE id=$key")or die(mysqli_error($connect));
	}
}
	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Set alias to students
	</title>
</head>
<body>
	<h3><?php if(!empty($nullm)) echo $nullm; ?></h3>
<form action="" method="GET">
	<table cellpadding="5px">
		<tr>
			<th>Estudiante</th>
			<th>Alias</th>
		</tr>
		<?php foreach($students as $key => $student): ?>
			<tr>
				<td>
					<div class="student_name">
						<?php echo $student; ?>
					</div>
				</td>
				<td>
					<div class="student_alias">
						<input type="text" name="<?php echo $key+1 ?>">
					</div>
				</td>				
			</tr>
		<?php endforeach; ?>		
	</table>
	<input type="submit" name="">
</form>
</body>
</html>