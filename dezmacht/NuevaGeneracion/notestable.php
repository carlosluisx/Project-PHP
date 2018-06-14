<?php
/* 
include "connect.php";
database data

1 retrieve evaluation metadata and store into array
$evaluation_metadata=array();
$query=mysqli_query($connect, "SELECT evaluacion,tipo,ponderacion FROM evaluaciones_2b2l");
while($row=mysqli_fetch_row($query)){
	$studentlist[]=array($row[0],$row[1]);
}

	}
function theader(){
	//must contain the info for the table evaluaciones
	return array();
}
*/
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		<?php //retrieve_notes_text($instance) ?>
 	</title>
 </head>
 <body>
 	<form action=""></form>
 <h1 style="text-align: center;">Notas </h1>
 <table>
 	<tr>
 		<?php //foreach(theader() as $header): ?>
 			<th><?php //echo $header;?></th>
 		<?php //endforeach; ?>
 	</tr>
 </table>
 </body>

 </html>
