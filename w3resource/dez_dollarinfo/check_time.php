<?php 
$current_time=date('H:i');
$dolartoday_price_upload_time=strtotime('5:32');


if ($current_time < $dolartoday_price_upload_time) {
	include "insert_into_db.php";
	$header="El precio del dolar hoy, ".current_date().", es de ".$today_price;
}
else $header="El precio del dolar no ha sido fijado aún para el día de hoy";
 ?>