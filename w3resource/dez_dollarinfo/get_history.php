<?php 
include_once "connect_dolartoday_db.php";
$query2=mysqli_query($connect, 
	"SELECT price, 'Hoy' dia FROM dollar_price
	WHERE date=curdate()
	UNION
	SELECT price, 'Ayer' FROM dollar_price
	WHERE date=subdate(curdate(),1)
	UNION
	SELECT * FROM dollar_price
	WHERE date!=curdate()
	AND date!=subdate(curdate(),1)
	ORDER BY dia DESC");

function retrieve_dollar_price_table(){
	global $query2;
	$result=mysqli_fetch_row($query2);	
	return $result;
}

 ?>
