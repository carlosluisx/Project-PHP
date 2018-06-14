<?php
/* **TASKS**
1. Aumento semanal
2. Aumento mensual
3. Aumento entre las dos últimas fechas
*/
$table=array();

while ($row2=mysqli_fetch_array($query2)) {
	$table[]=array($row2[0],$row2[1]);
}
print_r($table);
/*function retrieve_variation_text(){	
	return $text;
} */
 ?>
