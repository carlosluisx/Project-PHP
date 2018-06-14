<?php 
include "connect_dolartoday_db.php";
include "format_date.php";
//check if date exists on database

$query=mysqli_query($connect,"SELECT * FROM dollar_price WHERE date=current_date()");


$price_from_db=mysqli_fetch_row($query)[0];


function do_today_check()	
	{	
		global $query,$price_from_db;					
		if(!empty($price_from_db))
		{
		 return true;
		}
		else return false;
	}
?>