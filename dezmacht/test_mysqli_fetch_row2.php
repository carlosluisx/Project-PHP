<?php 
include "test_mysqli_fetch_row1.php";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Tabla de prueba</title>
 </head>
 <body>
 <table border="1px solid black" style="border-collapse: collapse;">
 	<tr>
 		<th>Monto</th>
 		<th>Fecha</th>
 	</tr>
 	<?php while($row=retrieve_table1()) :?>	
 	<tr> 
 	<?php foreach ($row as $value): ?> 			
 		<th><?php echo $value;?></th> 		
 	<?php endforeach; ?>
 	</tr>
 	<?php endwhile; ?>
 </table>
 </body>
 </html>