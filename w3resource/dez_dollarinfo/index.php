<?php 
include "check_time.php";
include "get_history.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="res/icon.png">
	<title>Dollar Info</title>
</head>
<body>
<h1><?php echo $header; ?></h1>
<h2>Historial</h2>

<table style="border-collapse: collapse;" border="1px solid black">	
	<tr>
		<th>Precio del dolar</th>
		<th>Fecha</th>
	</tr>
	<?php while($row=retrieve_dollar_price_table()): ?>
		<tr>
			<?php foreach ($row as $value): ?>			
			<td>
				<?php echo $value;?>
			</td>
			<?php endforeach;?>
		</tr>		
	<?php endwhile; ?>
</table>

</body>
</html>